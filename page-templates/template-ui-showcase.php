<?php
/**
 * Template Name: UI Components Showcase
 * Description: Complete documentation and showcase for Pure theme UI components and grid system
 */

get_header();
?>

<style>
    .demo-box {
        padding: 1em;
        background: var(--background-light);
        border: 1px solid var(--border-color);
        border-radius: var(--border-radius-sm);
        text-align: center;
        min-height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .demo-section {
        margin-bottom: 4em;
        padding-bottom: 3em;
        border-bottom: 2px solid var(--border-color);
    }
    .demo-section:last-child {
        border-bottom: none;
    }
    .code-block {
        background: #2d2d2d;
        color: #f8f8f2;
        padding: 1.5em;
        border-radius: var(--border-radius-md);
        overflow-x: auto;
        font-family: 'Monaco', 'Courier New', monospace;
        font-size: 0.875em;
        line-height: 1.5;
        margin: 1em 0;
    }
    .toc {
        position: sticky;
        top: 20px;
        background: var(--background-light);
        padding: var(--spacing-md);
        border-radius: var(--border-radius-md);
        border: 1px solid var(--border-color);
    }
    .toc ul {
        list-style: none;
        padding-left: 0;
    }
    .toc li {
        margin-bottom: 0.5em;
    }
    .toc a {
        text-decoration: none;
        color: var(--text-color);
    }
    .toc a:hover {
        color: var(--primary-color);
    }
    .page-header {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-color-dark) 100%);
        color: white;
        padding: 3em 0;
        margin-bottom: 3em;
        border-radius: var(--border-radius-md);
    }
</style>

<div class="container">
    <div class="page-header">
        <div class="row">
            <div class="col-xs-12">
                <h1 style="margin: 0; color: white;">Pure Theme UI Showcase</h1>
                <p style="margin: 0.5em 0 0 0; color: rgba(255,255,255,0.9); font-size: 1.125em;">
                    Complete guide to components, grid system, and utilities
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Sidebar TOC -->
        <div class="col-xs-12 col-md-3">
            <nav class="toc">
                <h3>Table of Contents</h3>
                <ul>
                    <li><a href="#grid-system">Grid System</a></li>
                    <li><a href="#buttons">Buttons</a></li>
                    <li><a href="#forms">Forms</a></li>
                    <li><a href="#cards">Cards</a></li>
                    <li><a href="#components">Components</a></li>
                    <li><a href="#navigation">Navigation</a></li>
                    <li><a href="#alpine">Alpine.js</a></li>
                    <li><a href="#utilities">Utilities</a></li>
                    <li><a href="#colors">Colors</a></li>
                    <li><a href="#spacing">Spacing</a></li>
                    <li><a href="#typography">Typography</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="col-xs-12 col-md-9">
            
            <!-- Grid System -->
            <section id="grid-system" class="demo-section">
                <h2>Flexbox Grid System</h2>
                <p>Pure theme uses <strong>Flexboxgrid</strong> - a powerful, flexible grid system based on flexbox.</p>
                
                <h3>Basic Grid</h3>
                <p>12-column responsive grid with <code>.row</code> and <code>.col-*</code> classes.</p>
                
                <div class="row" style="margin-bottom: 1em;">
                    <div class="col-xs-12">
                        <div class="demo-box">col-xs-12</div>
                    </div>
                </div>
                
                <div class="row" style="margin-bottom: 1em;">
                    <div class="col-xs-6">
                        <div class="demo-box">col-xs-6</div>
                    </div>
                    <div class="col-xs-6">
                        <div class="demo-box">col-xs-6</div>
                    </div>
                </div>
                
                <div class="row" style="margin-bottom: 1em;">
                    <div class="col-xs-4">
                        <div class="demo-box">col-xs-4</div>
                    </div>
                    <div class="col-xs-4">
                        <div class="demo-box">col-xs-4</div>
                    </div>
                    <div class="col-xs-4">
                        <div class="demo-box">col-xs-4</div>
                    </div>
                </div>
                
                <div class="row" style="margin-bottom: 1em;">
                    <div class="col-xs-3">
                        <div class="demo-box">col-xs-3</div>
                    </div>
                    <div class="col-xs-3">
                        <div class="demo-box">col-xs-3</div>
                    </div>
                    <div class="col-xs-3">
                        <div class="demo-box">col-xs-3</div>
                    </div>
                    <div class="col-xs-3">
                        <div class="demo-box">col-xs-3</div>
                    </div>
                </div>

                <div class="code-block">&lt;div class="row"&gt;
  &lt;div class="col-xs-6"&gt;Half width&lt;/div&gt;
  &lt;div class="col-xs-6"&gt;Half width&lt;/div&gt;
&lt;/div&gt;</div>

                <h3>Responsive Breakpoints</h3>
                <p>Breakpoints: <code>xs</code> (mobile), <code>sm</code> (tablet), <code>md</code> (desktop), <code>lg</code> (large desktop)</p>
                
                <div class="row" style="margin-bottom: 1em;">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="demo-box">Responsive</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="demo-box">Responsive</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="demo-box">Responsive</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="demo-box">Responsive</div>
                    </div>
                </div>

                <div class="code-block">&lt;div class="col-xs-12 col-sm-6 col-md-4 col-lg-3"&gt;
  Full on mobile, half on tablet, third on desktop
&lt;/div&gt;</div>

                <h3>Alignment</h3>
                
                <div class="row center-xs" style="margin-bottom: 1em;">
                    <div class="col-xs-6">
                        <div class="demo-box">center-xs</div>
                    </div>
                </div>

                <div class="row end-xs" style="margin-bottom: 1em;">
                    <div class="col-xs-6">
                        <div class="demo-box">end-xs</div>
                    </div>
                </div>

                <h3>Vertical Alignment</h3>
                
                <div class="row middle-xs" style="margin-bottom: 1em; min-height: 100px; background: var(--background-light);">
                    <div class="col-xs-4">
                        <div class="demo-box">middle-xs</div>
                    </div>
                </div>

                <h3>Distribution</h3>
                
                <div class="row between-xs" style="margin-bottom: 1em;">
                    <div class="col-xs-2">
                        <div class="demo-box">between</div>
                    </div>
                    <div class="col-xs-2">
                        <div class="demo-box">between</div>
                    </div>
                    <div class="col-xs-2">
                        <div class="demo-box">between</div>
                    </div>
                </div>

                <div class="alert alert-info mt-md">
                    <strong>Pro Tip:</strong> Combine grid classes with utility classes for powerful layouts!
                    <br>Example: <code>&lt;div class="col-xs-12 col-md-6 p-md shadow rounded"&gt;</code>
                </div>
            </section>

            <!-- Buttons -->
            <section id="buttons" class="demo-section">
                <h2>Buttons</h2>
                
                <h3>Primary Button</h3>
                <div style="display: flex; flex-wrap: wrap; gap: 1em; margin-bottom: 2em;">
                    <button class="button">Primary Button</button>
                    <button class="button" disabled>Disabled</button>
                </div>

                <div class="code-block">&lt;button class="button"&gt;Primary Button&lt;/button&gt;
&lt;button class="button" disabled&gt;Disabled&lt;/button&gt;</div>

                <h3>Button with Icon</h3>
                <div style="display: flex; flex-wrap: wrap; gap: 1em; align-items: center; margin-bottom: 1em;">
                    <button class="button button-icon">
                        <i data-lucide="check"></i>
                        Confirm
                    </button>
                    <button class="button button-icon">
                        <i data-lucide="download"></i>
                        Download
                    </button>
                    <button class="button button-icon">
                        <i data-lucide="save"></i>
                        Save
                    </button>
                    <button class="button button-icon" disabled>
                        <i data-lucide="x"></i>
                        Disabled
                    </button>
                </div>

                <div class="code-block">&lt;button class="button button-icon"&gt;
  &lt;i data-lucide="check"&gt;&lt;/i&gt;
  Confirm
&lt;/button&gt;</div>
            </section>

            <!-- Forms -->
            <section id="forms" class="demo-section">
                <h2>Forms</h2>
                
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <h3>Basic Form</h3>
                        <form>
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
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" class="form-control" placeholder="Your message..."></textarea>
                            </div>
                            
                            <div class="form-check">
                                <input type="checkbox" id="agree">
                                <label for="agree">I agree to terms</label>
                            </div>
                            
                            <button type="submit" class="button button-icon">
                                <i data-lucide="send"></i>
                                Submit
                            </button>
                        </form>
                    </div>
                    
                    <div class="col-xs-12 col-md-6">
                        <h3>Input States</h3>
                        
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

                        <h3>Input Groups</h3>
                        
                        <div class="form-group">
                            <label>With Prepend</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>With Button</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="button">Go</button>
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
                    </div>
                </div>

                <div class="code-block mt-md">&lt;div class="form-group"&gt;
  &lt;label class="label-required"&gt;Field Label&lt;/label&gt;
  &lt;input type="text" class="form-control"&gt;
&lt;/div&gt;</div>
            </section>

            <!-- Cards -->
            <section id="cards" class="demo-section">
                <h2>Cards</h2>
                <p class="text-muted">Built with utility classes: <code>.border .rounded .shadow .p-md .bg-white</code></p>
                
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="border rounded shadow-sm p-md bg-white" style="margin-bottom: 1em;">
                            <h4>Basic Card</h4>
                            <p class="text-muted">Built with utility classes for maximum flexibility.</p>
                            <button class="button button-icon">
                                <i data-lucide="arrow-right"></i>
                                Learn More
                            </button>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="border rounded shadow p-md bg-white" style="margin-bottom: 1em;">
                            <div class="d-flex justify-between align-center mb-sm">
                                <h4 class="m-0">With Header</h4>
                                <i data-lucide="star"></i>
                            </div>
                            <p class="text-muted">Use flexbox utilities for custom layouts.</p>
                            <div class="d-flex gap-sm">
                                <span class="badge">New</span>
                                <span class="badge badge-secondary">Featured</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="border rounded shadow-sm p-0 bg-white overflow-hidden" style="margin-bottom: 1em;">
                            <div style="background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-color-dark) 100%); height: 120px;"></div>
                            <div class="p-md">
                                <h4>Image Card</h4>
                                <p class="text-muted">Cards with images and content.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="code-block">&lt;div class="border rounded shadow-sm p-md bg-white"&gt;
  &lt;h4&gt;Card Title&lt;/h4&gt;
  &lt;p class="text-muted"&gt;Card content&lt;/p&gt;
  &lt;button class="button"&gt;Action&lt;/button&gt;
&lt;/div&gt;</div>
            </section>

            <!-- Components -->
            <section id="components" class="demo-section">
                <h2>Components</h2>
                
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <h3>Alerts</h3>
                        <div class="alert alert-info">
                            <strong>Info!</strong> This is an informational message.
                        </div>
                        <div class="alert alert-success">
                            <strong>Success!</strong> Action completed successfully.
                        </div>
                        <div class="alert alert-warning">
                            <strong>Warning!</strong> Please review carefully.
                        </div>
                        <div class="alert alert-error">
                            <strong>Error!</strong> Something went wrong.
                        </div>

                        <h3 class="mt-lg">Badges</h3>
                        <div class="d-flex gap-sm flex-wrap mb-md">
                            <span class="badge">New</span>
                            <span class="badge badge-secondary">Sale</span>
                            <span class="badge badge-light">Popular</span>
                            <span class="badge badge-pill">99+</span>
                        </div>

                        <h3>Tags</h3>
                        <div class="d-flex gap-sm flex-wrap mb-md">
                            <span class="tag">WordPress</span>
                            <span class="tag">PHP</span>
                            <span class="tag">JavaScript</span>
                            <a href="#" class="tag">
                                Alpine.js
                                <span class="tag-close">×</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-md-6">
                        <h3>Avatars</h3>
                        <div class="d-flex align-center gap-md mb-lg">
                            <div class="avatar avatar-sm" style="background: #667eea;"></div>
                            <div class="avatar" style="background: #764ba2;"></div>
                            <div class="avatar avatar-lg" style="background: #f093fb;"></div>
                            <div class="avatar avatar-xl" style="background: #f5576c;"></div>
                        </div>

                        <h3>Spinners</h3>
                        <div class="d-flex align-center gap-md mb-lg">
                            <div class="spinner spinner-sm"></div>
                            <div class="spinner"></div>
                            <div class="spinner spinner-lg"></div>
                        </div>

                        <h3>Progress Bars</h3>
                        <div class="progress mb-sm">
                            <div class="progress-bar" style="width: 25%">25%</div>
                        </div>
                        <div class="progress mb-sm">
                            <div class="progress-bar" style="width: 75%">75%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%">100%</div>
                        </div>
                    </div>
                </div>

                <h3 class="mt-lg">Dividers</h3>
                <div class="divider"></div>
                <div class="divider divider-text">or continue with</div>
                <div class="divider"></div>

                <h3 class="mt-lg">List Group</h3>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="list-group">
                            <div class="list-group-item">First item</div>
                            <div class="list-group-item active">Active item</div>
                            <div class="list-group-item">Third item</div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="list-group">
                            <a href="#" class="list-group-item">Link item 1</a>
                            <a href="#" class="list-group-item">Link item 2</a>
                            <a href="#" class="list-group-item">Link item 3</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Navigation -->
            <section id="navigation" class="demo-section">
                <h2>Navigation</h2>
                
                <h3>Breadcrumbs</h3>
                <nav class="breadcrumbs">
                    <a href="#">Home</a>
                    <span class="separator">/</span>
                    <a href="#">Documentation</a>
                    <span class="separator">/</span>
                    <span class="current">UI Components</span>
                </nav>

                <h3 class="mt-lg">Pagination</h3>
                <ul class="pagination">
                    <li class="page-item disabled"><span>Previous</span></li>
                    <li class="page-item"><a href="#">1</a></li>
                    <li class="page-item current"><span>2</span></li>
                    <li class="page-item"><a href="#">3</a></li>
                    <li class="page-item"><a href="#">Next</a></li>
                </ul>
            </section>

            <!-- Alpine.js Components -->
            <section id="alpine" class="demo-section">
                <h2>Alpine.js Interactive Components</h2>
                
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <h3>Dropdown</h3>
                        <div x-data="dropdown()">
                            <button @click="toggle()" class="button button-icon">
                                Options <i data-lucide="chevron-down"></i>
                            </button>
                            <div x-show="open" x-transition @click.outside="close()" 
                                 class="bg-white border rounded p-sm mt-xs shadow">
                                <a href="#" class="d-block p-sm">Option 1</a>
                                <a href="#" class="d-block p-sm">Option 2</a>
                                <a href="#" class="d-block p-sm">Option 3</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <h3>Accordion</h3>
                        <div x-data="accordion()">
                            <button @click="toggle()" class="button button-icon" style="width: 100%; justify-content: space-between;">
                                <span>Click to expand</span>
                                <i :data-lucide="open ? 'chevron-up' : 'chevron-down'"></i>
                            </button>
                            <div x-show="open" x-transition class="bg-light p-md rounded mt-sm">
                                <p>This is the accordion content that shows and hides.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 mt-md">
                        <h3>Modal</h3>
                        <div x-data="modal()">
                            <button @click="show()" class="button">Open Modal</button>
                            <div x-show="open" x-transition @click.self="hide()" 
                                 style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.5); display: flex; align-items: center; justify-content: center; z-index: 9999;">
                                <div class="bg-white p-lg rounded shadow-lg" style="max-width: 500px; width: 90%;">
                                    <div class="d-flex justify-between align-center mb-md">
                                        <h3 class="m-0">Modal Title</h3>
                                        <button @click="hide()" style="background: none; border: none; cursor: pointer; font-size: 1.5em;">×</button>
                                    </div>
                                    <p>This is a modal dialog window.</p>
                                    <button @click="hide()" class="button mt-md">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 mt-md">
                        <h3>Toggle</h3>
                        <div x-data="toggle(false)">
                            <button @click="toggle()" class="button">
                                <span x-text="open ? 'Hide' : 'Show'"></span> Content
                            </button>
                            <div x-show="open" x-transition class="border rounded p-md mt-sm bg-light">
                                <p>This content is shown/hidden with the toggle component.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="mt-lg">Tabs</h3>
                <div x-data="tabs(1)">
                    <div class="d-flex gap-sm border-bottom mb-md">
                        <button @click="setTab(1)" :class="isActive(1) ? 'border-primary' : ''" 
                                class="bg-transparent border-0 p-md" style="cursor: pointer; border-bottom-width: 2px !important;">
                            Tab 1
                        </button>
                        <button @click="setTab(2)" :class="isActive(2) ? 'border-primary' : ''" 
                                class="bg-transparent border-0 p-md" style="cursor: pointer; border-bottom-width: 2px !important;">
                            Tab 2
                        </button>
                    </div>
                    <div x-show="isActive(1)" x-transition><p>Content for tab 1</p></div>
                    <div x-show="isActive(2)" x-transition><p>Content for tab 2</p></div>
                </div>

                <div class="code-block mt-lg">x-data="dropdown()"    /* Dropdown component */
x-data="accordion()"   /* Accordion component */
x-data="modal()"       /* Modal component */
x-data="tabs(1)"       /* Tabs component */
x-data="toggle()"      /* Toggle component */</div>
            </section>

            <!-- Utilities -->
            <section id="utilities" class="demo-section">
                <h2>Utility Classes</h2>
                
                <h3>Display & Flexbox</h3>
                <div class="code-block">d-flex, d-block, d-inline-block, d-grid
justify-start, justify-center, justify-between
align-start, align-center, align-end
gap-xs, gap-sm, gap-md, gap-lg, gap-xl
flex-wrap, flex-nowrap</div>

                <h3>Example</h3>
                <div class="d-flex justify-between align-center gap-md p-md border rounded mb-md">
                    <div>Left content</div>
                    <div>Right content</div>
                </div>

                <h3>Gray Scale</h3>
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="bg-gray-50 border p-sm rounded mb-xs text-center">gray-50</div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="bg-gray-100 border p-sm rounded mb-xs text-center">gray-100</div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="bg-gray-200 border p-sm rounded mb-xs text-center">gray-200</div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="bg-gray-300 border p-sm rounded mb-xs text-center">gray-300</div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="bg-gray-400 p-sm rounded mb-xs text-center text-white">gray-400</div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="bg-gray-500 p-sm rounded mb-xs text-center text-white">gray-500</div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="bg-gray-600 p-sm rounded mb-xs text-center text-white">gray-600</div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="bg-gray-700 p-sm rounded mb-xs text-center text-white">gray-700</div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="bg-gray-800 p-sm rounded mb-xs text-center text-white">gray-800</div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="bg-gray-900 p-sm rounded mb-xs text-center text-white">gray-900</div>
                    </div>
                </div>

                <div class="code-block mt-md">.bg-gray-50 through .bg-gray-900
.text-gray-50 through .text-gray-900
.border-gray-100 through .border-gray-500
.text-base, .text-muted, .text-disabled</div>
            </section>

            <!-- Colors -->
            <section id="colors" class="demo-section">
                <h2>Colors</h2>
                
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-3 mb-md">
                        <div class="bg-primary p-md rounded text-center text-white">Primary</div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 mb-md">
                        <div class="bg-secondary p-md rounded text-center text-white">Secondary</div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 mb-md">
                        <div class="bg-success p-md rounded text-center text-white">Success</div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 mb-md">
                        <div class="bg-info p-md rounded text-center text-white">Info</div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 mb-md">
                        <div class="bg-warning p-md rounded text-center">Warning</div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 mb-md">
                        <div class="bg-danger p-md rounded text-center text-white">Danger</div>
                    </div>
                </div>

                <div class="code-block">bg-primary, bg-secondary, bg-success, bg-info, bg-warning, bg-danger
text-primary, text-secondary, text-success, text-muted</div>
            </section>

            <!-- Spacing -->
            <section id="spacing" class="demo-section">
                <h2>Spacing</h2>
                
                <p>Use margin (<code>m-*</code>) and padding (<code>p-*</code>) utilities with sizes: <code>xs</code>, <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code></p>
                
                <div class="code-block">/* Margin */
mt-md    /* margin-top: var(--spacing-md) */
mb-lg    /* margin-bottom: var(--spacing-lg) */
mx-sm    /* margin-left & margin-right */
my-md    /* margin-top & margin-bottom */
m-0      /* margin: 0 */

/* Padding */
pt-md    /* padding-top */
pb-lg    /* padding-bottom */
px-sm    /* padding-left & padding-right */
py-md    /* padding-top & padding-bottom */
p-xl     /* padding: var(--spacing-xl) */</div>

                <h3>Example</h3>
                <div class="bg-light p-lg mb-md rounded">
                    <div class="bg-primary text-center p-md rounded text-white">
                        p-lg on outer, p-md on inner
                    </div>
                </div>
            </section>

            <!-- Typography -->
            <section id="typography" class="demo-section">
                <h2>Typography</h2>
                
                <div class="mb-md">
                    <p class="text-left">Left aligned text</p>
                    <p class="text-center">Center aligned text</p>
                    <p class="text-right">Right aligned text</p>
                </div>

                <div class="mb-md">
                    <p class="text-bold">Bold text</p>
                    <p class="text-normal">Normal weight text</p>
                    <p class="text-light">Light weight text</p>
                </div>

                <div class="code-block">text-left, text-center, text-right
text-bold, text-normal, text-light
text-uppercase, text-lowercase, text-capitalize
text-small, text-large
text-truncate, text-break</div>
            </section>

        </div>
    </div>
</div>

<div class="container mt-xl mb-xl">
    <div class="row center-xs">
        <div class="col-xs-12">
            <div class="divider"></div>
            <p class="text-center text-muted mt-md">
                <strong>Pure Theme UI Showcase</strong><br>
                Built with Flexboxgrid, Alpine.js, and Lucide Icons<br>
                <a href="<?php echo home_url(); ?>" class="button button-icon mt-md">
                    <i data-lucide="home"></i>
                    Back to Home
                </a>
            </p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
