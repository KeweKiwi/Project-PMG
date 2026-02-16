<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        $contactInfo = [
            'address' => [
                'street' => 'Jl. Kemang Raya No. 123',
                'city' => 'Jakarta Selatan 12560',
                'country' => 'Indonesia'
            ],
            'phones' => [
                'primary' => '+62 21 123 4567',
                'mobile' => '+62 812 3456 7890',
                'whatsapp' => '+62 812 3456 7890'
            ],
            'email' => [
                'general' => 'info@puncakmasgallery.com',
                'projects' => 'projects@puncakmasgallery.com',
                'careers' => 'careers@puncakmasgallery.com'
            ],
            'social' => [
                'instagram' => '@puncakmasgallery',
                'facebook' => 'Puncak Mas Gallery',
                'linkedin' => 'puncak-mas-gallery'
            ],
            'hours' => [
                'weekdays' => 'Monday - Friday: 9:00 AM - 6:00 PM',
                'saturday' => 'Saturday: 9:00 AM - 4:00 PM',
                'sunday' => 'Sunday: By appointment only'
            ]
        ];

        $offices = [
            [
                'name' => 'Jakarta Office (Headquarters)',
                'address' => 'Jl. Kemang Raya No. 123, Jakarta Selatan 12560',
                'phone' => '+62 21 123 4567',
                'email' => 'jakarta@puncakmasgallery.com',
                'maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7519...',
                'coordinates' => [-6.2615, 106.8106]
            ],
            [
                'name' => 'Surabaya Office',
                'address' => 'Jl. HR Muhammad No. 456, Surabaya 60261',
                'phone' => '+62 31 789 0123',
                'email' => 'surabaya@puncakmasgallery.com',
                'maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5123...',
                'coordinates' => [-7.2575, 112.7521]
            ],
            [
                'name' => 'Bali Office',
                'address' => 'Jl. Sunset Road No. 789, Seminyak, Bali 80361',
                'phone' => '+62 361 456 7890',
                'email' => 'bali@puncakmasgallery.com',
                'maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.2341...',
                'coordinates' => [-8.6705, 115.1603]
            ]
        ];

        $faqs = [
            [
                'question' => 'How long does a typical interior design project take?',
                'answer' => 'Project timelines vary depending on scope and complexity. A single room design typically takes 4-6 weeks, while full home renovations can take 3-6 months. We provide detailed timelines during the consultation phase.'
            ],
            [
                'question' => 'Do you work within specific budget ranges?',
                'answer' => 'We work with various budget ranges and offer different service packages to accommodate different needs. During our initial consultation, we discuss your budget to ensure we propose solutions that align with your financial expectations.'
            ],
            [
                'question' => 'Can you work with existing furniture and decor?',
                'answer' => 'Absolutely! We love incorporating meaningful pieces you already own. Our designers are skilled at blending existing items with new elements to create cohesive, personalized spaces that tell your story.'
            ],
            [
                'question' => 'Do you provide 3D visualizations?',
                'answer' => 'Yes, we provide high-quality 3D renderings and visualizations for all our design packages. This helps you see exactly how your space will look before any work begins.'
            ],
            [
                'question' => 'What areas do you serve?',
                'answer' => 'We primarily serve Jakarta, Surabaya, Bali, and surrounding areas. For projects outside these regions, we can discuss travel arrangements and additional logistics during consultation.'
            ],
            [
                'question' => 'Do you offer warranty on your work?',
                'answer' => 'Yes, we provide warranty coverage on all our construction and installation work. The warranty period varies by service type, with details provided in your project contract.'
            ]
        ];

        return view('contact.index', compact('contactInfo', 'offices', 'faqs'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'inquiry_type' => 'required|string|in:general,project,consultation,partnership',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'project_type' => 'nullable|string|in:residential,commercial,retail,hospitality',
            'budget_range' => 'nullable|string|in:under-50m,50m-100m,100m-500m,over-500m',
            'timeline' => 'nullable|string|in:asap,1-3months,3-6months,6months+',
            'location' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
            'preferred_contact' => 'nullable|string|in:email,phone,whatsapp',
            'newsletter' => 'boolean'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $validator->validated();

        // Here you can save to database
        // ContactInquiry::create($data);

        // Send email notification
        try {
            // Mail::to('info@puncakmasgallery.com')->send(new ContactInquiry($data));
            
            // You can also send auto-reply to the client
            // Mail::to($data['email'])->send(new ContactAutoReply($data));
            
            $message = 'Thank you for your inquiry! We will get back to you within 24 hours.';
            
            // Add to newsletter if requested
            if (isset($data['newsletter']) && $data['newsletter']) {
                // Add to newsletter subscription
                // Newsletter::create(['email' => $data['email'], 'name' => $data['name']]);
                $message .= ' You have also been subscribed to our newsletter.';
            }
            
            return redirect()->route('contact')
                ->with('success', $message);
                
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'There was an error sending your message. Please try again.')
                ->withInput();
        }
    }

    public function newsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'name' => 'nullable|string|max:255'
        ]);

        // Save to newsletter subscription
        // Newsletter::create([
        //     'email' => $request->email,
        //     'name' => $request->name ?? null,
        //     'subscribed_at' => now()
        // ]);

        return response()->json([
            'success' => true,
            'message' => 'Thank you for subscribing to our newsletter!'
        ]);
    }

    public function downloadBrochure()
    {
        $filePath = public_path('downloads/puncak-mas-gallery-brochure.pdf');
        
        if (file_exists($filePath)) {
            return response()->download($filePath, 'Puncak-Mas-Gallery-Brochure.pdf');
        }
        
        return redirect()->route('contact')
            ->with('error', 'Brochure is currently unavailable. Please contact us directly.');
    }

    public function callback(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'preferred_time' => 'nullable|string|in:morning,afternoon,evening'
        ]);

        // Save callback request
        // CallbackRequest::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'We will call you back within 2 hours during business days.'
        ]);
    }
}