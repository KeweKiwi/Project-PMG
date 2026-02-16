<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = $this->getAllProjects();
        $categories = ['All', 'Residential', 'Commercial', 'Retail'];
        
        return view('portfolio.index', compact('projects', 'categories'));
    }

    public function category($category)
    {
        $projects = $this->getAllProjects();
        
        if ($category !== 'all') {
            $projects = array_filter($projects, function($project) use ($category) {
                return strtolower($project['category']) === strtolower($category);
            });
        }
        
        $categories = ['All', 'Residential', 'Commercial', 'Retail'];
        $activeCategory = ucfirst($category);
        
        return view('portfolio.index', compact('projects', 'categories', 'activeCategory'));
    }

    public function show($id)
    {
        $projects = $this->getAllProjects();
        $project = collect($projects)->where('id', $id)->first();
        
        if (!$project) {
            abort(404);
        }
        
        return view('portfolio.show', compact('project'));
    }

    private function getAllProjects()
    {
        return [
            [
                'id' => 1,
                'title' => 'Modern Penthouse',
                'client' => 'Private Client',
                'location' => 'Jakarta, Indonesia',
                'category' => 'Residential',
                'year' => '2024',
                'area' => '250 sqm',
                'image' => '/images/projects/penthouse-1.jpg',
                'gallery' => [
                    '/images/projects/penthouse-1.jpg',
                    '/images/projects/penthouse-2.jpg',
                    '/images/projects/penthouse-3.jpg',
                    '/images/projects/penthouse-4.jpg'
                ],
                'description' => 'A sophisticated penthouse design that maximizes natural light and creates seamless indoor-outdoor living. The space features contemporary furnishings, premium materials, and panoramic city views.',
                'concept' => 'The design concept revolves around minimalist luxury, incorporating clean lines, neutral tones, and high-end finishes to create an elegant urban sanctuary.'
            ],
            [
                'id' => 2,
                'title' => 'Executive Office Suite',
                'client' => 'Tech Startup',
                'location' => 'Surabaya, Indonesia',
                'category' => 'Commercial',
                'year' => '2024',
                'area' => '400 sqm',
                'image' => '/images/projects/office-1.jpg',
                'gallery' => [
                    '/images/projects/office-1.jpg',
                    '/images/projects/office-2.jpg',
                    '/images/projects/office-3.jpg',
                    '/images/projects/office-4.jpg'
                ],
                'description' => 'A dynamic workspace designed to foster creativity and collaboration. Features include flexible meeting spaces, modern workstations, and branded design elements.',
                'concept' => 'Creating an inspiring work environment that reflects the company culture while maintaining functionality and employee well-being.'
            ],
            [
                'id' => 3,
                'title' => 'Luxury Boutique',
                'client' => 'Fashion Brand',
                'location' => 'Bali, Indonesia',
                'category' => 'Retail',
                'year' => '2024',
                'area' => '180 sqm',
                'image' => '/images/projects/boutique-1.jpg',
                'gallery' => [
                    '/images/projects/boutique-1.jpg',
                    '/images/projects/boutique-2.jpg',
                    '/images/projects/boutique-3.jpg',
                    '/images/projects/boutique-4.jpg'
                ],
                'description' => 'An elegant retail space that enhances the shopping experience through thoughtful layout, premium materials, and strategic lighting design.',
                'concept' => 'Blending tropical elements with contemporary luxury to create a unique brand experience that resonates with the local culture.'
            ],
            [
                'id' => 4,
                'title' => 'Family Villa',
                'client' => 'Private Family',
                'location' => 'Bandung, Indonesia',
                'category' => 'Residential',
                'year' => '2023',
                'area' => '350 sqm',
                'image' => '/images/projects/villa-1.jpg',
                'gallery' => [
                    '/images/projects/villa-1.jpg',
                    '/images/projects/villa-2.jpg',
                    '/images/projects/villa-3.jpg',
                    '/images/projects/villa-4.jpg'
                ],
                'description' => 'A warm and inviting family home that balances comfort with style. Features open-plan living, natural materials, and child-friendly design elements.',
                'concept' => 'Creating a harmonious living space that adapts to family life while maintaining aesthetic appeal and functionality.'
            ],
            [
                'id' => 5,
                'title' => 'Corporate Headquarters',
                'client' => 'Financial Services',
                'location' => 'Jakarta, Indonesia',
                'category' => 'Commercial',
                'year' => '2023',
                'area' => '800 sqm',
                'image' => '/images/projects/corporate-1.jpg',
                'gallery' => [
                    '/images/projects/corporate-1.jpg',
                    '/images/projects/corporate-2.jpg',
                    '/images/projects/corporate-3.jpg',
                    '/images/projects/corporate-4.jpg'
                ],
                'description' => 'A prestigious corporate environment that conveys professionalism and success. Features executive offices, conference rooms, and client reception areas.',
                'concept' => 'Establishing a powerful corporate identity through sophisticated design, premium materials, and strategic space planning.'
            ],
            [
                'id' => 6,
                'title' => 'Artisan Café',
                'client' => 'Local Business',
                'location' => 'Yogyakarta, Indonesia',
                'category' => 'Retail',
                'year' => '2023',
                'area' => '120 sqm',
                'image' => '/images/projects/cafe-1.jpg',
                'gallery' => [
                    '/images/projects/cafe-1.jpg',
                    '/images/projects/cafe-2.jpg',
                    '/images/projects/cafe-3.jpg',
                    '/images/projects/cafe-4.jpg'
                ],
                'description' => 'A cozy café design that celebrates local craftsmanship and creates a welcoming community space for coffee lovers.',
                'concept' => 'Integrating traditional Indonesian elements with modern café functionality to create an authentic and memorable experience.'
            ]
        ];
    }
}