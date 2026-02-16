<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        // Sample recent projects data
        $recentProjects = [
            [
                'id' => 1,
                'title' => 'Modern Penthouse',
                'client' => 'Private Client',
                'location' => 'Jakarta, Indonesia',
                'category' => 'Residential',
                'image' => '/images/projects/penthouse-1.jpg',
                'description' => 'Luxury penthouse with contemporary design and panoramic city views'
            ],
            [
                'id' => 2,
                'title' => 'Executive Office',
                'client' => 'Tech Company',
                'location' => 'Surabaya, Indonesia',
                'category' => 'Commercial',
                'image' => '/images/projects/office-1.jpg',
                'description' => 'Modern office space designed for productivity and collaboration'
            ],
            [
                'id' => 3,
                'title' => 'Boutique Store',
                'client' => 'Fashion Brand',
                'location' => 'Bali, Indonesia',
                'category' => 'Retail',
                'image' => '/images/projects/boutique-1.jpg',
                'description' => 'Elegant retail space that enhances the brand experience'
            ]
        ];

        // Sample testimonials data
        $testimonials = [
            [
                'id' => 1,
                'name' => 'Sarah Johnson',
                'project' => 'Residential Project',
                'content' => 'Puncak Mas Gallery transformed our home beyond our expectations. The attention to detail and professional service was outstanding.',
                'rating' => 5,
                'image' => '/images/testimonials/sarah.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Michael Chen',
                'project' => 'Commercial Project',
                'content' => 'Professional, creative, and delivered on time. Our office space now reflects our brand perfectly and impresses our clients.',
                'rating' => 5,
                'image' => '/images/testimonials/michael.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Lisa Anderson',
                'project' => 'Retail Project',
                'content' => 'The team understood our vision perfectly and created a space that our customers love. Sales have increased significantly.',
                'rating' => 5,
                'image' => '/images/testimonials/lisa.jpg'
            ],
            [
                'id' => 4,
                'name' => 'David Kumar',
                'project' => 'Residential Project',
                'content' => 'Exceptional design and flawless execution. Our dream home became a reality thanks to Puncak Mas Gallery.',
                'rating' => 5,
                'image' => '/images/testimonials/david.jpg'
            ]
        ];

        return view('home', compact('recentProjects', 'testimonials'));
    }

    public function consultation(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'service' => 'required|string|in:residential,commercial,retail,consultation',
            'message' => 'nullable|string|max:1000'
        ]);

        // Here you can save to database or send email
        // For now, we'll just redirect with success message
        
        // Example: Save to database (you'll need to create a consultations table and model)
        // Consultation::create($request->all());

        // Example: Send email notification
        // Mail::to('info@puncakmasgallery.com')->send(new ConsultationRequest($request->all()));

        return redirect()->route('home')->with('success', 'Thank you for your consultation request! We will contact you within 24 hours.');
    }
}