<?php

class SmartServixBlog {
    private $apiUrl;

    public function __construct($baseUrl = 'http://blogs.test', $limit = 3) {
        // We keep _embed for the featured image and pull the last 3 posts
        $this->apiUrl = rtrim($baseUrl, '/') . '/wp-json/wp/v2/posts?_embed&per_page=' . $limit;
    }

    public function getFeaturedPosts() {
        $context = stream_context_create([
            'http' => ['timeout' => 3, 'ignore_errors' => true]
        ]);

        $response = @file_get_contents($this->apiUrl, false, $context);
        if (!$response) return false;

        $posts = json_decode($response);
        if (!is_array($posts) || empty($posts)) return false;

        return $this->formatPosts($posts);
    }

    public function getFeaturedOnly() {
        $context = stream_context_create([
            'http' => ['timeout' => 3, 'ignore_errors' => true]
        ]);

        $response = @file_get_contents($this->apiUrl, false, $context);
        if (!$response) return false;

        $posts = json_decode($response);
        if (!is_array($posts) || empty($posts)) return false;

        $featuredList = [];
        foreach ($posts as $post) {
            // Check the ACF 'is_featured' field. 
            // In ACF, a 'Select' or 'Radio' field usually returns a string like "yes" or "no".
            $isFeatured = $post->acf['is_featured'] ?? 'no';

            if (strtolower($isFeatured) === 'yes') {
                $featuredList[] = (object) [
                    'title'   => $post->title->rendered ?? 'Untitled',
                    'excerpt' => !empty($post->excerpt->rendered) ? strip_tags($post->excerpt->rendered) : '',
                    'link'    => $post->link ?? '#',
                    'date'    => isset($post->date) ? date('F Y', strtotime($post->date)) : '',
                    'image'   => $post->_embedded->{'wp:featuredmedia'}[0]->source_url 
                                 ?? 'assets/images/portfolio/fallback.jpg',
                    'author'  => $post->acf['custom_author'] ?? 'Lead Architect'
                ];
            }
        }

        // Final Guard: If no posts were marked 'yes', return false to hide the section
        return (!empty($featuredList)) ? $featuredList : false;
    }

    private function formatPosts($posts) {
        $cleanPosts = [];
        foreach ($posts as $post) {
            // Fetch the ACF custom_author, fallback to 'Lead Architect'
            $customAuthor = $post->acf['custom_author'] ?? 'Lead Architect';

            $cleanPosts[] = (object) [
                'title'   => $post->title->rendered ?? 'Untitled',
                'excerpt' => !empty($post->excerpt->rendered) ? strip_tags($post->excerpt->rendered) : '',
                'link'    => $post->link ?? '#',
                'date'    => isset($post->date) ? date('F Y', strtotime($post->date)) : '',
                'image'   => $post->_embedded->{'wp:featuredmedia'}[0]->source_url 
                             ?? 'assets/images/portfolio/fallback.jpg',
                'author'  => $customAuthor
            ];
        }
        return $cleanPosts;
    }
}