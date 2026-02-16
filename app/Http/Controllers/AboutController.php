<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $studioInfo = [
            'founded' => '2008',
            'projects_completed' => '200+',
            'team_members' => '15',
            'awards' => '12'
        ];

        $team = [
            [
                'name' => 'Maria Santoso',
                'position' => 'Principal Designer & Founder',
                'experience' => '15+ years',
                'specialization' => 'Luxury Residential Design',
                'image' => '/images/team/maria.jpg',
                'bio' => 'Maria founded Puncak Mas Gallery with a vision to create exceptional interior spaces that reflect individual personalities and lifestyles.'
            ],
            [
                'name' => 'Andre Wijaya',
                'position' => 'Senior Commercial Designer',
                'experience' => '12+ years',
                'specialization' => 'Commercial & Retail Spaces',
                'image' => '/images/team/andre.jpg',
                'bio' => 'Andre brings extensive experience in creating functional and inspiring commercial environments that drive business success.'
            ],
            [
                'name' => 'Sari Lestari',
                'position' => 'Project Manager',
                'experience' => '8+ years',
                'specialization' => 'Project Coordination & Client Relations',
                'image' => '/images/team/sari.jpg',
                'bio' => 'Sari ensures every project runs smoothly from concept to completion, maintaining the highest standards of quality and service.'
            ]
        ];

        $philosophy = [
            'vision' => 'To be Indonesia\'s leading interior design studio, creating spaces that inspire and transform lives.',
            'mission' => 'We create exceptional interior environments that reflect our clients\' personalities, enhance their lifestyles, and exceed their expectations through innovative design and impeccable execution.',
            'values' => [
                'Excellence in every detail',
                'Client-centered approach',
                'Sustainable design practices',
                'Innovation and creativity',
                'Integrity and professionalism'
            ]
        ];

        $timeline = [
            [
                'year' => '2008',
                'milestone' => 'Founded Puncak Mas Gallery',
                'description' => 'Started with a small team and big dreams'
            ],
            [
                'year' => '2012',
                'milestone' => 'First Commercial Project',
                'description' => 'Expanded into commercial interior design'
            ],
            [
                'year' => '2016',
                'milestone' => 'Design Excellence Award',
                'description' => 'Recognized for outstanding residential design'
            ],
            [
                'year' => '2020',
                'milestone' => '100 Projects Completed',
                'description' => 'Milestone achievement in project delivery'
            ],
            [
                'year' => '2024',
                'milestone' => 'Sustainable Design Initiative',
                'description' => 'Leading eco-friendly interior solutions'
            ]
        ];

        return view('about.index', compact('studioInfo', 'team', 'philosophy', 'timeline'));
    }

    public function services()
    {
        $services = [
            [
                'name' => 'Interior Design',
                'icon' => 'fas fa-pencil-ruler',
                'description' => 'Complete interior design solutions from concept to completion',
                'features' => [
                    'Space planning and layout',
                    'Color schemes and material selection',
                    '3D visualization and renderings',
                    'Custom furniture design',
                    'Lighting design consultation'
                ],
                'process' => [
                    'Initial consultation and brief',
                    'Concept development',
                    'Design presentation',
                    'Detailed drawings and specifications',
                    'Implementation supervision'
                ]
            ],
            [
                'name' => 'Build & Construction',
                'icon' => 'fas fa-hammer',
                'description' => 'Professional construction and renovation services',
                'features' => [
                    'Complete renovation projects',
                    'Custom carpentry and millwork',
                    'Electrical and lighting installation',
                    'Plumbing and mechanical systems',
                    'Quality control and project management'
                ],
                'process' => [
                    'Site assessment and planning',
                    'Permits and documentation',
                    'Construction phase management',
                    'Quality inspections',
                    'Final handover and warranty'
                ]
            ],
            [
                'name' => 'Styling & Furnishing',
                'icon' => 'fas fa-palette',
                'description' => 'Furniture selection and styling services',
                'features' => [
                    'Furniture sourcing and procurement',
                    'Art and accessory selection',
                    'Window treatments and soft furnishings',
                    'Plant and landscape coordination',
                    'Final styling and photography'
                ],
                'process' => [
                    'Style consultation',
                    'Furniture and accessory selection',
                    'Procurement and delivery coordination',
                    'Installation and styling',
                    'Final touches and adjustments'
                ]
            ],
            [
                'name' => 'Design Consultation',
                'icon' => 'fas fa-comments',
                'description' => 'Expert design advice and guidance',
                'features' => [
                    'Design concept development',
                    'Problem-solving and space optimization',
                    'Budget planning and recommendations',
                    'Vendor and contractor referrals',
                    'Project timeline development'
                ],
                'process' => [
                    'Initial assessment meeting',
                    'Analysis and recommendations',
                    'Concept presentation',
                    'Implementation guidance',
                    'Follow-up support'
                ]
            ]
        ];

        $packages = [
            [
                'name' => 'Essential Design',
                'price' => 'Starting from Rp 5,000,000',
                'description' => 'Perfect for small spaces and budget-conscious projects',
                'includes' => [
                    'Space planning consultation',
                    'Color and material recommendations',
                    'Basic 3D visualization',
                    'Shopping list and sources',
                    '2 revision rounds'
                ]
            ],
            [
                'name' => 'Complete Design',
                'price' => 'Starting from Rp 15,000,000',
                'description' => 'Comprehensive design solution for full room makeovers',
                'includes' => [
                    'Detailed space planning',
                    'Complete material specifications',
                    'High-quality 3D renderings',
                    'Custom furniture design',
                    'Implementation supervision',
                    'Unlimited revisions'
                ]
            ],
            [
                'name' => 'Luxury Full Service',
                'price' => 'Starting from Rp 50,000,000',
                'description' => 'Premium end-to-end interior design and build service',
                'includes' => [
                    'Complete project management',
                    'Custom design and build',
                    'Premium material sourcing',
                    'Furniture and styling',
                    'Project coordination',
                    'White-glove delivery',
                    '2-year warranty'
                ]
            ]
        ];

        $workProcess = [
            [
                'step' => 1,
                'title' => 'Discovery & Consultation',
                'duration' => '1-2 weeks',
                'description' => 'We begin with understanding your vision, lifestyle, and requirements through detailed consultation.',
                'activities' => [
                    'Initial consultation meeting',
                    'Site survey and measurements',
                    'Lifestyle and needs assessment',
                    'Budget discussion and planning',
                    'Project timeline development'
                ]
            ],
            [
                'step' => 2,
                'title' => 'Concept Development',
                'duration' => '2-3 weeks',
                'description' => 'Our team develops creative concepts and design solutions tailored to your specific needs.',
                'activities' => [
                    'Mood board creation',
                    'Space planning and layout',
                    'Material and color selection',
                    'Preliminary 3D visualizations',
                    'Concept presentation'
                ]
            ],
            [
                'step' => 3,
                'title' => 'Design Development',
                'duration' => '3-4 weeks',
                'description' => 'We refine the chosen concept and develop detailed specifications and documentation.',
                'activities' => [
                    'Detailed drawings and plans',
                    'Final 3D renderings',
                    'Material specifications',
                    'Furniture and fixture selection',
                    'Budget finalization'
                ]
            ],
            [
                'step' => 4,
                'title' => 'Implementation',
                'duration' => '4-12 weeks',
                'description' => 'Professional execution of the design plan with careful project management and quality control.',
                'activities' => [
                    'Construction coordination',
                    'Material procurement',
                    'Installation supervision',
                    'Quality control inspections',
                    'Progress reporting'
                ]
            ],
            [
                'step' => 5,
                'title' => 'Completion & Handover',
                'duration' => '1 week',
                'description' => 'Final styling, quality checks, and project handover with ongoing support.',
                'activities' => [
                    'Final styling and furnishing',
                    'Quality inspection',
                    'Client walkthrough',
                    'Documentation handover',
                    'Warranty and maintenance guide'
                ]
            ]
        ];

        return view('about.services', compact('services', 'packages', 'workProcess'));
    }
}