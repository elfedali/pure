<?php
/**
 * Template Name: UI Components Showcase
 * Description: A template to showcase all available UI components
 */

get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            
            <header class="page-header" style="margin: 3em 0;">
                <h1>UI Components Showcase</h1>
                <p class="lead">All available components in the Pure theme</p>
            </header>

            <!-- Buttons -->
            <section style="margin-bottom: 4em;">
                <h2>Buttons</h2>
                <div style="margin-bottom: 2em;">
                    <h3>Basic Buttons</h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 1em; margin-bottom: 1em;">
                        <button class="button">Primary Button</button>
                        <button class="button-secondary">Secondary</button>
                        <button class="button-outline">Outline</button>
                        <button class="button-ghost">Ghost</button>
                        <button class="button-light">Light</button>
                        <button class="button" disabled>Disabled</button>
                    </div>
                </div>

                <div style="margin-bottom: 2em;">
                    <h3>Button Sizes</h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 1em; align-items: center; margin-bottom: 1em;">
                        <button class="button button-small">Small</button>
                        <button class="button">Default</button>
                        <button class="button button-large">Large</button>
                    </div>
                    <button class="button button-block">Block Button (Full Width)</button>
                </div>

                <div style="margin-bottom: 2em;">
                    <h3>Buttons with Icons</h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 1em; margin-bottom: 1em;">
                        <button class="button button-icon">
                            <i data-lucide="plus"></i>
                            Add Item
                        </button>
                        <button class="button button-icon">
                            <i data-lucide="download"></i>
                            Download
                        </button>
                        <button class="button-icon-only">
                            <i data-lucide="search"></i>
                        </button>
                        <button class="button-icon-only">
                            <i data-lucide="settings"></i>
                        </button>
                    </div>
                </div>

                <div style="margin-bottom: 2em;">
                    <h3>Button Group</h3>
                    <div class="button-group">
                        <button class="button">Left</button>
                        <button class="button">Center</button>
                        <button class="button">Right</button>
                    </div>
                </div>
            </section>

            <!-- Forms -->
            <section style="margin-bottom: 4em;">
                <h2>Forms</h2>
                
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <h3>Basic Form</h3>
                        <form style="margin-bottom: 2em;">
                            <div class="form-group">
                                <label for="name" class="label-required">Full Name</label>
                                <input type="text" id="name" class="form-control" placeholder="Enter your name">
                                <small class="form-text">This field is required</small>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" class="form-control" placeholder="you@example.com">
                            </div>
                            
                            <div class="form-group">
                                <label for="select">Select Option</label>
                                <select id="select" class="form-control">
                                    <option>Choose one...</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" class="form-control" placeholder="Your message..."></textarea>
                            </div>
                            
                            <div class="form-check">
                                <input type="checkbox" id="agree">
                                <label for="agree">I agree to the terms and conditions</label>
                            </div>
                            
                            <button type="submit" class="button">Submit Form</button>
                        </form>
                    </div>
                    
                    <div class="col-xs-12 col-md-6">
                        <h3>Input Variants</h3>
                        
                        <div class="form-group">
                            <label>Small Input</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Small size">
                        </div>
                        
                        <div class="form-group">
                            <label>Default Input</label>
                            <input type="text" class="form-control" placeholder="Default size">
                        </div>
                        
                        <div class="form-group">
                            <label>Large Input</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Large size">
                        </div>
                        
                        <div class="form-group">
                            <label>Valid Input</label>
                            <input type="text" class="form-control is-valid" value="valid@example.com">
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        
                        <div class="form-group">
                            <label>Invalid Input</label>
                            <input type="text" class="form-control is-invalid" value="invalid">
                            <div class="invalid-feedback">Please enter a valid value.</div>
                        </div>
                    </div>
                </div>

                <h3>Input Groups</h3>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label>Prepend</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label>Append</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="button">Go</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Search Form</h3>
                <form class="search-form">
                    <input type="search" class="form-control search-field" placeholder="Search...">
                    <button type="submit" class="button search-submit">
                        <i data-lucide="search"></i>
                    </button>
                </form>
            </section>

            <!-- Cards -->
            <section style="margin-bottom: 4em;">
                <h2>Cards</h2>
                
                <div class="card-grid">
                    <!-- Basic Card -->
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Basic Card</h3>
                            <p class="card-text">This is a basic card with just a body. Cards are flexible content containers.</p>
                            <a href="#" class="card-link">Card Link</a>
                        </div>
                    </div>

                    <!-- Card with Header & Footer -->
                    <div class="card">
                        <div class="card-header">
                            <strong>Card Header</strong>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">With Header/Footer</h3>
                            <p class="card-text">This card has a header and footer section for additional structure.</p>
                        </div>
                        <div class="card-footer">
                            <small>Card Footer</small>
                        </div>
                    </div>

                    <!-- Card with Image -->
                    <div class="card">
                        <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); height: 200px;"></div>
                        <div class="card-body">
                            <h3 class="card-title">Image Card</h3>
                            <p class="card-text">Cards can include images at the top for visual appeal.</p>
                            <button class="button">Learn More</button>
                        </div>
                    </div>

                    <!-- Card with Meta -->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-meta">
                                <span class="meta-item">
                                    <i data-lucide="calendar"></i>
                                    Nov 11, 2025
                                </span>
                                <span class="meta-item">
                                    <i data-lucide="user"></i>
                                    John Doe
                                </span>
                                <span class="meta-item">
                                    <i data-lucide="folder"></i>
                                    WordPress
                                </span>
                            </div>
                            <h3 class="card-title">Post Card</h3>
                            <p class="card-text">Perfect for blog posts with metadata like date, author, and category.</p>
                            <div class="card-actions">
                                <button class="button">Read More</button>
                                <button class="button-ghost">
                                    <i data-lucide="heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Elevated Card -->
                    <div class="card card-elevated">
                        <div class="card-body">
                            <h3 class="card-title">Elevated Card</h3>
                            <p class="card-text">This card has more shadow for emphasis.</p>
                        </div>
                    </div>

                    <!-- Flat Card -->
                    <div class="card card-flat">
                        <div class="card-body">
                            <h3 class="card-title">Flat Card</h3>
                            <p class="card-text">This card has no shadow initially.</p>
                        </div>
                    </div>
                </div>

                <h3 style="margin-top: 2em;">Horizontal Card</h3>
                <div class="card card-horizontal" style="max-width: 800px;">
                    <div style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); width: 40%; min-height: 200px;"></div>
                    <div class="card-body">
                        <h3 class="card-title">Horizontal Layout</h3>
                        <p class="card-text">Cards can be displayed horizontally for different layouts. Great for featured content or articles with side images.</p>
                        <button class="button">View Details</button>
                    </div>
                </div>
            </section>

            <!-- Components -->
            <section style="margin-bottom: 4em;">
                <h2>Components</h2>
                
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <h3>Badges</h3>
                        <div style="margin-bottom: 2em;">
                            <span class="badge">New</span>
                            <span class="badge badge-secondary">Sale</span>
                            <span class="badge badge-light">Popular</span>
                            <span class="badge badge-pill">99+</span>
                        </div>

                        <h3>Tags/Chips</h3>
                        <div style="margin-bottom: 2em; display: flex; flex-wrap: wrap; gap: 0.5em;">
                            <span class="tag">WordPress</span>
                            <span class="tag">PHP</span>
                            <span class="tag">JavaScript</span>
                            <a href="#" class="tag">
                                Alpine.js
                                <span class="tag-close">×</span>
                            </a>
                        </div>

                        <h3>Avatars</h3>
                        <div style="margin-bottom: 2em; display: flex; align-items: center; gap: 1em;">
                            <div class="avatar" style="background: #667eea;"></div>
                            <div class="avatar avatar-sm" style="background: #764ba2;"></div>
                            <div class="avatar avatar-lg" style="background: #f093fb;"></div>
                            <div class="avatar avatar-xl" style="background: #f5576c;"></div>
                        </div>

                        <h3>Spinner/Loader</h3>
                        <div style="margin-bottom: 2em; display: flex; align-items: center; gap: 1em;">
                            <div class="spinner spinner-sm"></div>
                            <div class="spinner"></div>
                            <div class="spinner spinner-lg"></div>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-md-6">
                        <h3>Alerts</h3>
                        <div class="alert alert-info">
                            <strong class="alert-heading">Info!</strong> This is an info alert message.
                        </div>
                        <div class="alert alert-success">
                            <strong>Success!</strong> Your action was completed successfully.
                        </div>
                        <div class="alert alert-warning">
                            <strong>Warning!</strong> Please check this carefully.
                        </div>
                        <div class="alert alert-error">
                            <strong>Error!</strong> Something went wrong.
                        </div>
                    </div>
                </div>

                <h3>Breadcrumbs</h3>
                <nav class="breadcrumbs">
                    <a href="#">Home</a>
                    <span class="separator">/</span>
                    <a href="#">Blog</a>
                    <span class="separator">/</span>
                    <a href="#">Category</a>
                    <span class="separator">/</span>
                    <span class="current">Current Page</span>
                </nav>

                <h3>Pagination</h3>
                <ul class="pagination">
                    <li class="page-item disabled">
                        <span>Previous</span>
                    </li>
                    <li class="page-item">
                        <a href="#">1</a>
                    </li>
                    <li class="page-item current">
                        <span>2</span>
                    </li>
                    <li class="page-item">
                        <a href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a href="#">4</a>
                    </li>
                    <li class="page-item">
                        <a href="#">Next</a>
                    </li>
                </ul>

                <h3>Dividers</h3>
                <div class="divider"></div>
                <div class="divider divider-text">or continue with</div>
                <div class="divider"></div>

                <h3>Progress Bar</h3>
                <div style="margin-bottom: 1em;">
                    <div class="progress">
                        <div class="progress-bar" style="width: 25%">25%</div>
                    </div>
                </div>
                <div style="margin-bottom: 1em;">
                    <div class="progress">
                        <div class="progress-bar" style="width: 50%">50%</div>
                    </div>
                </div>
                <div style="margin-bottom: 1em;">
                    <div class="progress">
                        <div class="progress-bar" style="width: 75%">75%</div>
                    </div>
                </div>
                <div style="margin-bottom: 2em;">
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%">100%</div>
                    </div>
                </div>

                <h3>List Group</h3>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="list-group">
                            <div class="list-group-item">First item</div>
                            <div class="list-group-item active">Second item (active)</div>
                            <div class="list-group-item">Third item</div>
                            <div class="list-group-item">Fourth item</div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="list-group">
                            <a href="#" class="list-group-item">Link item 1</a>
                            <a href="#" class="list-group-item">Link item 2</a>
                            <a href="#" class="list-group-item">Link item 3</a>
                            <a href="#" class="list-group-item">Link item 4</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Alpine.js Components -->
            <section style="margin-bottom: 4em;">
                <h2>Alpine.js Interactive Components</h2>
                
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <h3>Dropdown</h3>
                        <div x-data="dropdown()">
                            <button @click="toggle()" class="button button-icon">
                                Options
                                <i data-lucide="chevron-down"></i>
                            </button>
                            
                            <div x-show="open" 
                                 x-transition
                                 @click.outside="close()"
                                 style="margin-top: 0.5em; background: white; border: 1px solid var(--border-color); border-radius: var(--border-radius-md); padding: 0.5em;">
                                <a href="#" style="display: block; padding: 0.5em 1em; text-decoration: none; color: var(--text-color);">Option 1</a>
                                <a href="#" style="display: block; padding: 0.5em 1em; text-decoration: none; color: var(--text-color);">Option 2</a>
                                <a href="#" style="display: block; padding: 0.5em 1em; text-decoration: none; color: var(--text-color);">Option 3</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-md-4">
                        <h3>Accordion</h3>
                        <div x-data="accordion()">
                            <button @click="toggle()" class="button button-outline button-block button-icon" style="justify-content: space-between;">
                                <span>Click to Toggle</span>
                                <i :data-lucide="open ? 'chevron-up' : 'chevron-down'"></i>
                            </button>
                            
                            <div x-show="open" x-transition style="margin-top: 1em; padding: 1em; background: var(--background-light); border-radius: var(--border-radius-md);">
                                <p>This is the accordion content. It can contain any HTML content including text, images, or other components.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-md-4">
                        <h3>Modal</h3>
                        <div x-data="modal()">
                            <button @click="show()" class="button">Open Modal</button>
                            
                            <div x-show="open" 
                                 x-transition
                                 @click.self="hide()"
                                 style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.5); display: flex; align-items: center; justify-content: center; z-index: 9999;">
                                <div style="background: white; padding: 2em; border-radius: var(--border-radius-md); max-width: 500px; width: 90%;">
                                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1em;">
                                        <h3 style="margin: 0;">Modal Title</h3>
                                        <button @click="hide()" class="button-icon-only button-ghost">
                                            <i data-lucide="x"></i>
                                        </button>
                                    </div>
                                    <p>This is a modal dialog. Click outside or press the X to close.</p>
                                    <button @click="hide()" class="button">Close Modal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 style="margin-top: 2em;">Tabs</h3>
                <div x-data="tabs(1)">
                    <div style="display: flex; gap: 0.5em; border-bottom: 2px solid var(--border-color); margin-bottom: 1em;">
                        <button @click="setTab(1)" 
                                :style="isActive(1) ? 'border-bottom: 2px solid var(--primary-color); margin-bottom: -2px;' : ''"
                                style="padding: 1em 1.5em; background: transparent; border: none; cursor: pointer;">
                            Tab 1
                        </button>
                        <button @click="setTab(2)" 
                                :style="isActive(2) ? 'border-bottom: 2px solid var(--primary-color); margin-bottom: -2px;' : ''"
                                style="padding: 1em 1.5em; background: transparent; border: none; cursor: pointer;">
                            Tab 2
                        </button>
                        <button @click="setTab(3)" 
                                :style="isActive(3) ? 'border-bottom: 2px solid var(--primary-color); margin-bottom: -2px;' : ''"
                                style="padding: 1em 1.5em; background: transparent; border: none; cursor: pointer;">
                            Tab 3
                        </button>
                    </div>
                    
                    <div x-show="isActive(1)" x-transition>
                        <h4>Tab 1 Content</h4>
                        <p>This is the content for the first tab. You can put any content here.</p>
                    </div>
                    <div x-show="isActive(2)" x-transition>
                        <h4>Tab 2 Content</h4>
                        <p>This is the content for the second tab. Tabs are great for organizing related content.</p>
                    </div>
                    <div x-show="isActive(3)" x-transition>
                        <h4>Tab 3 Content</h4>
                        <p>This is the content for the third tab. Alpine.js makes this super easy!</p>
                    </div>
                </div>

                <h3 style="margin-top: 2em;">Toggle Component</h3>
                <div x-data="toggle(false)">
                    <button @click="toggle()" class="button">
                        <span x-text="open ? 'Hide' : 'Show'"></span> Content
                    </button>
                    
                    <div x-show="open" x-transition style="margin-top: 1em;">
                        <div class="card">
                            <div class="card-body">
                                <h4>Toggled Content</h4>
                                <p>This content is shown/hidden with the toggle component.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer style="padding: 3em 0; text-align: center; border-top: 1px solid var(--border-color);">
                <p>All components are ready to use in your WordPress theme!</p>
                <p>
                    <a href="<?php echo home_url(); ?>" class="button">Back to Home</a>
                </p>
            </footer>

        </div>
    </div>
</div>

<?php get_footer(); ?>
