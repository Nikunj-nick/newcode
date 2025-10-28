<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-center">
                <div class="logo">
                    <a href="<?php echo e(url('home')); ?>">
                        <img src="<?php echo e(url('assets/images/logo/' . (system_setting('company_logo') ? system_setting('company_logo') : 'logo.png'))); ?>" alt="Logo" srcset="">
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <?php if(has_permissions('read', 'dashboard')): ?>
                    <li class="sidebar-item">
                        <a href="<?php echo e(url('home')); ?>" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span class="menu-item"><?php echo e(__('Dashboard')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(has_permissions('read', 'facility')): ?>
                    <li class="sidebar-item">
                        <a href="<?php echo e(url('parameters')); ?>" class='sidebar-link'>
                            <i class="bi bi-x-diamond"></i>
                            <span class="menu-item"><?php echo e(__('Facilities')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(has_permissions('read', 'categories')): ?>
                    <li class="sidebar-item">
                        <a href="<?php echo e(url('categories')); ?>" class='sidebar-link'>
                            <i class="fas fa-align-justify"></i>
                            <span class="menu-item"><?php echo e(__('Categories')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(has_permissions('read', 'near_by_places')): ?>
                    <li class="sidebar-item">
                        <a href="<?php echo e(url('outdoor_facilities')); ?>" class='sidebar-link'>
                            <i class="bi bi-geo-alt"></i>
                            <span class="menu-item"><?php echo e(__('Near By Places')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(has_permissions('read', 'customer')): ?>
                    <li class="sidebar-item">
                        <a href="<?php echo e(url('customer')); ?>" class='sidebar-link'>
                            <i class="bi bi-person-circle"></i>
                            <span class="menu-item"><?php echo e(__('Customer')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(has_permissions('read', 'property')): ?>
                    <li class="sidebar-item">
                        <a href="<?php echo e(url('property')); ?>" class='sidebar-link'>
                            <i class="bi bi-building"></i>
                            <span class="menu-item"><?php echo e(__('Property')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="sidebar-item">
                    <a href="<?php echo e(url('project')); ?>" class='sidebar-link'>
                      <i class="bi bi-house"></i>
                        <span class="menu-item"><?php echo e(__('Project')); ?></span>
                    </a>
                </li>
                <?php if(has_permissions('read', 'customer')): ?>
                    <li class="sidebar-item">
                        <a href="<?php echo e(url('report-reasons')); ?>" class='sidebar-link'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-list">
                                <line x1="8" y1="6" x2="21" y2="6"></line>
                                <line x1="8" y1="12" x2="21" y2="12"></line>
                                <line x1="8" y1="18" x2="21" y2="18"></line>
                                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                <line x1="3" y1="18" x2="3.01" y2="18"></line>
                            </svg>
                            <span class="menu-item"><?php echo e(__('Report Reasons')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if(has_permissions('read', 'customer')): ?>
                    <li class="sidebar-item">
                        <a href="<?php echo e(url('users_reports')); ?>" class='sidebar-link'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-alert-octagon">
                                <polygon
                                    points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                </polygon>
                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                            </svg>
                            <span class="menu-item"><?php echo e(__('Users Reports')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="sidebar-item">
                    <a href="<?php echo e(url('users_inquiries')); ?>" class='sidebar-link'>
                        <i class="fas fa-question-circle"></i>
                        <span class="menu-item"><?php echo e(__('Users Inquiries')); ?></span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo e(url('getChatList')); ?>" class='sidebar-link'>
                        <i class="bi bi-chat"></i>
                        <span class="menu-item"><?php echo e(__('Chat')); ?></span>
                    </a>
                </li>
                <?php if(has_permissions('read', 'slider')): ?>
                    <li class="sidebar-item">
                        <a href="<?php echo e(url('slider')); ?>" class='sidebar-link'>
                            <i class="bi bi-sliders"></i>
                            <span class="menu-item"><?php echo e(__('Slider')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="sidebar-item">
                    <a href="<?php echo e(url('article')); ?>" class='sidebar-link'>
                        <i class="bi bi-vector-pen"></i>
                        <span class="menu-item"><?php echo e(__('Article')); ?></span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo e(url('featured_properties')); ?>" class='sidebar-link'>
                        <i class="bi bi-badge-ad"></i>
                        <span class="menu-item"><?php echo e(__('Advertisement')); ?></span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo e(url('package')); ?>" class='sidebar-link'>

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                            <path fill="#000" fill-rule="evenodd"
                                d="M1.5 9A1.5 1.5 0 0 1 3 7.5h18A1.5 1.5 0 0 1 22.5 9v11a1.5 1.5 0 0 1-1.5 1.5H3A1.5 1.5 0 0 1 1.5 20V9ZM3 8.5a.5.5 0 0 0-.5.5v11a.5.5 0 0 0 .5.5h18a.5.5 0 0 0 .5-.5V9a.5.5 0 0 0-.5-.5H3Z"
                                clip-rule="evenodd" />
                            <path fill="#000" fill-rule="evenodd"
                                d="M9.77 10.556a.5.5 0 0 1 .517.034l5 3.5a.5.5 0 0 1 0 .82l-5 3.5A.5.5 0 0 1 9.5 18v-7a.5.5 0 0 1 .27-.444zm.73 1.404v5.08l3.628-2.54-3.628-2.54zM20 6H4V5h16v1zm-2-2.5H6v-1h12v1z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="menu-item"><?php echo e(__('Package')); ?></span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo e(url('get_user_purchased_packages')); ?>" class='sidebar-link'>

                        <i class="bi bi-person-check"></i>

                        <span class="menu-item"><?php echo e(__('Users Packages')); ?></span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo e(url('calculator')); ?>" class='sidebar-link'>
                        <i class="bi bi-calculator"></i>
                        <span class="menu-item"><?php echo e(__('Calculator')); ?></span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo e(url('payment')); ?>" class='sidebar-link'>
                        <i class="bi bi-cash"></i>
                        <span class="menu-item"><?php echo e(__('Payment')); ?></span>
                    </a>
                </li>
                <?php if(has_permissions('read', 'notification')): ?>
                    <li class="sidebar-item">
                        <a href="<?php echo e(url('notification')); ?>" class='sidebar-link'>
                            <i class="bi bi-bell"></i>
                            <span class="menu-item"><?php echo e(__('Notification')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(has_permissions('read', 'users_accounts') ||
                        has_permissions('read', 'about_us') ||
                        has_permissions('read', 'privacy_policy') ||
                        has_permissions('read', 'terms_condition') ||
                        has_permissions('read', 'web_setting') ||
                        has_permissions('read', 'language') ||
                        has_permissions('read', 'app_setting')): ?>

                    <li class="sidebar-item has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-gear"></i>
                            <span class="menu-item"><?php echo e(__('Settings')); ?></span>
                        </a>
                        <ul class="submenu" style="padding-left: 0rem">
                            <?php if(has_permissions('read', 'users_accounts')): ?>
                                <li class="submenu-item">
                                    <a href="<?php echo e(url('users')); ?>"><?php echo e(__('Users Accounts')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(has_permissions('read', 'about_us')): ?>
                                <li class="submenu-item">
                                    <a href="<?php echo e(url('about-us')); ?>"><?php echo e(__('About Us')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(has_permissions('read', 'privacy_policy')): ?>
                                <li class="submenu-item">
                                    <a href="<?php echo e(url('privacy-policy')); ?>"><?php echo e(__('Privacy Policy')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(has_permissions('read', 'terms_condition')): ?>
                                <li class="submenu-item">
                                    <a href="<?php echo e(url('terms-conditions')); ?>"><?php echo e(__('Terms & Condition')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(has_permissions('read', 'system_settings')): ?>
                                <li class="submenu-item">
                                    <a href="<?php echo e(url('system-settings')); ?>"><?php echo e(__('System Settings')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(has_permissions('read', 'app_setting')): ?>
                                <li class="submenu-item">
                                    <a href="<?php echo e(url('app_settings')); ?>"><?php echo e(__('App Settings')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(has_permissions('read', 'web_setting')): ?>
                                <li class="submenu-item">
                                    <a href="<?php echo e(url('web_settings')); ?>"><?php echo e(__('Web Settings')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(has_permissions('read', 'seo_setting')): ?>
                                <li class="submenu-item">
                                    <a href="<?php echo e(url('seo_settings')); ?>"><?php echo e(__('SEO Settings')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(has_permissions('read', 'firebase_setting')): ?>
                                <li class="submenu-item">
                                    <a href="<?php echo e(url('firebase_settings')); ?>"><?php echo e(__('Firebase Settings')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(has_permissions('read', 'language')): ?>
                                <li class="submenu-item">
                                    <a href="<?php echo e(url('language')); ?>"><?php echo e(__('Languages')); ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?php echo e(url('system_version')); ?>" class='sidebar-link'>
                            <i class="fas fa-cloud-download-alt"></i>
                            <span class="menu-item"><?php echo e(__('System Update')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH /home/wrteam-dev/ebroker/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>