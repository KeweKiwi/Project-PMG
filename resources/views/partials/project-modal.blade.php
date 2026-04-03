<!-- Project Modal -->
<div id="projectModal" class="modal">
    <span class="close-modal" onclick="closeProjectModal()">&times;</span>
    
    <!-- Project Details Panel -->
    <div id="projectDetails" class="project-details">
        <!-- Close Details Button (inside panel) -->
        <button class="details-toggle" onclick="toggleDetails()" aria-label="Hide details panel">
            <span id="detailsArrow">‹</span>
        </button>
        
        <h2 class="font-boska text-3xl md:text-4xl mb-6" id="modalProjectTitle">Modern Living Room</h2>
        
        <div class="mb-8">
            <h3 class="font-satoshi text-sm uppercase tracking-widest mb-3 text-gray-600">PROJECT DESCRIPTION</h3>
            <p class="font-satoshi text-sm leading-relaxed text-gray-700" id="modalProjectDescription">
                A garage is often seen as an afterthought—a purely utilitarian space hidden from the rest of the home. But at Puncak Mas Gallery, we believe the garage is more than just storage; it's a gallery, a stage, and a reflection of identity.
            </p>
        </div>
        
        <div class="mb-8">
            <h3 class="font-satoshi text-sm uppercase tracking-widest mb-3 text-gray-600">KEY FEATURES</h3>
            <ul class="font-satoshi text-sm leading-relaxed text-gray-700 space-y-2" id="modalProjectFeatures">
                <li>• High-end materials and finishes</li>
                <li>• Integrated lighting system</li>
                <li>• Custom cabinetry solutions</li>
                <li>• Smart home integration</li>
            </ul>
        </div>
        
        <div class="mb-8">
            <h3 class="font-satoshi text-sm uppercase tracking-widest mb-3 text-gray-600">PROJECT DETAILS</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 font-satoshi text-sm">
                <div>
                    <p class="text-gray-600">Year</p>
                    <p class="font-medium" id="modalProjectYear">2023</p>
                </div>
                <div>
                    <p class="text-gray-600">Location</p>
                    <p class="font-medium" id="modalProjectLocation">Malang, Indonesia</p>
                </div>
                <div>
                    <p class="text-gray-600">Designer</p>
                    <p class="font-medium" id="modalProjectDesigner">Puncak Mas Gallery</p>
                </div>
                <div>
                    <p class="text-gray-600">Category</p>
                    <p class="font-medium" id="modalProjectCategoryDetail">RESIDENTIAL DESIGN</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal-content">
        <!-- Reopen Details Button (shows when panel is hidden) -->
        <button class="reopen-details-btn" onclick="toggleDetails()">
            Show Details
        </button>
        
        <!-- Image Gallery Navigation -->
        <button class="gallery-nav-btn prev" onclick="changeGalleryImage(-1)" aria-label="Previous image">
            <span class="gallery-nav-icon" aria-hidden="true">‹</span>
        </button>
        
        <button class="gallery-nav-btn next" onclick="changeGalleryImage(1)" aria-label="Next image">
            <span class="gallery-nav-icon" aria-hidden="true">›</span>
        </button>
        
        <!-- Gallery Images Container -->
        <div class="gallery-stage" onclick="handleGalleryStageTap()">
            <div class="gallery-viewport">
                <img id="modalImagePrimary" class="gallery-image active" src="" alt="Project Image">
                <img id="modalImageSecondary" class="gallery-image" src="" alt="Project Image">
            </div>
        </div>
        
        <!-- Image Counter -->
        <div class="image-counter">
            <span id="currentImageIndex">1</span> / <span id="totalImages">4</span>
        </div>
    </div>
</div>
