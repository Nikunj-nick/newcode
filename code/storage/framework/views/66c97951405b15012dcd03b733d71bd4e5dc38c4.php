<?php $__env->startSection('title'); ?>
    <?php echo e(__('Update Product')); ?>

<?php $__env->stopSection(); ?>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<?php $__env->startSection('page-title'); ?>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h4><?php echo $__env->yieldContent('title'); ?></h4>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('property.index')); ?>" id="subURL"><?php echo e(__('View Property')); ?></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?php echo e(__('Update')); ?>

                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo Form::open([
        'route' => ['property.update', $id],
        'method' => 'PATCH',
        'data-parsley-validate',
        'files' => true,
        'id' => 'myForm',
    ]); ?>


    <div class='row'>
        <div class='col-md-6'>

            <div class="card">

                <h3 class="card-header"><?php echo e(__('Details')); ?></h3>
                <hr>

                
                <div class="card-body" style="height: 549px;">
                    <div class="col-md-12 col-12 form-group mandatory">
                        <?php echo e(Form::label('category', __('Category'), ['class' => 'form-label col-12 '])); ?>

                        <select name="category" class="choosen-select form-select form-control-sm" data-parsley-minSelect='1' id="category" required='true'>
                            <option value=""><?php echo e(__('Choose Category')); ?></option>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($row->id); ?>"
                                    <?php echo e($list->category_id == $row->id ? ' selected=selected' : ''); ?>

                                    data-parametertypes='<?php echo e($row->parameter_types); ?>'> <?php echo e($row->category); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    
                    <div class="col-md-12 col-12 form-group mandatory">
                        <?php echo e(Form::label('title', __('Title'), ['class' => 'form-label col-12 '])); ?>

                        <?php echo e(Form::text('title', isset($list->title) ? $list->title : '', ['class' => 'form-control ', 'placeholder' => 'Title', 'required' => 'true', 'id' => 'title'])); ?>

                    </div>

                    
                    <div class="col-md-12 col-12 form-group mandatory">
                        <?php echo e(Form::label('description', 'Description', ['class' => 'form-label col-12 '])); ?>

                        <?php echo e(Form::textarea('description', isset($list->description) ? $list->description : '', ['class' => 'form-control mb-3', 'rows' => '3', 'id' => '', 'required' => 'true'])); ?>

                    </div>

                    
                    <div class="col-md-12 col-12  form-group  mandatory">
                        <div class="row">
                            <?php echo e(Form::label('', __('Property Type'), ['class' => 'form-label col-12 '])); ?>


                            
                            <div class="col-md-6">
                                <?php echo e(Form::radio('property_type', 0, null, ['class' => 'form-check-input', 'id' => 'property_type', 'required' => true, isset($list->propery_type) && $list->propery_type == 0 ? 'checked' : ''])); ?>

                                <?php echo e(Form::label('property_type', __('For Sell'), ['class' => 'form-check-label'])); ?>

                            </div>

                            
                            <div class="col-md-6">
                                <?php echo e(Form::radio('property_type', 1, null, ['class' => 'form-check-input', 'id' => 'property_type', 'required' => true, isset($list->propery_type) && $list->propery_type == 1 ? 'checked' : ''])); ?>

                                <?php echo e(Form::label('property_type', __('For Rent'), ['class' => 'form-check-label'])); ?>

                            </div>
                        </div>
                    </div>


                    
                    <div class="col-md-12 col-12 form-group mandatory" id='duration'>
                        <?php echo e(Form::label('Duration', __('Duration For Price'), ['class' => 'form-label col-12 '])); ?>

                        <select name="price_duration" id="price_duration"class="choosen-select form-select form-control-sm" data-parsley-minSelect='1'>
                            <option value="Daily" <?php echo e($list->rentduration == 'Daily' ? 'selected' : ''); ?>>Daily </option>
                            <option value="Monthly" <?php echo e($list->rentduration == 'Monthly' ? 'selected' : ''); ?>>Monthly </option>
                            <option value="Yearly" <?php echo e($list->rentduration == 'Yearly' ? 'selected' : ''); ?>>Yearly</option>
                            <option value="Quarterly" <?php echo e($list->rentduration == 'Quarterly' ? 'selected' : ''); ?>>Quarterly
                            </option>
                        </select>
                    </div>

                    
                    <div class="control-label col-12 form-group">
                        <?php echo e(Form::label('price', __('price') . '(' . $currency_symbol . ')', ['class' => 'form-label col-12 '])); ?>

                        <?php echo e(Form::number('price', isset($list->price) ? $list->price : '', ['class' => 'form-control ', 'placeholder' => 'Price', 'required' => 'true', 'min' => '1', 'id' => 'price'])); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-6'>

            <div class="card">
                <h3 class="card-header"><?php echo e(__('SEO Details')); ?></h3>
                <hr>
                <div class="row card-body">

                    
                    <div class="col-md-6 col-sm-12 form-group">
                        <?php echo e(Form::label('title', __('Title'), ['class' => 'form-label text-center'])); ?>

                        <textarea id="edit_meta_title" name="edit_meta_title" class="form-control" oninput="getWordCount('edit_meta_title','edit_meta_title_count','12.9px arial')" rows="2" <?php echo e(system_setting('seo_settings') != '' && system_setting('seo_settings') == 1 ? 'required' : ''); ?> style="height: 75px"><?php echo e($list->meta_title); ?></textarea>
                        <br>
                        <h6 id="edit_meta_title_count">0</h6>
                    </div>

                    
                    <div class="col-md-4 col-sm-12 form-group card">
                        <?php echo e(Form::label('title', __('Image'), ['class' => 'form-label text-center'])); ?>

                        <input type="file" name="meta_image" id="meta_image" class="filepond" <?php echo e(system_setting('seo_settings') != '' && system_setting('seo_settings') == 1 ? 'required' : ''); ?>>
                    </div>

                    
                    <div class="col-md-2 col-sm-12 text-center">
                        <img src="<?php echo e($list->meta_image); ?>" alt="" height="100px" width="100px">
                    </div>

                    
                    <div class="col-md-12 col-sm-12 form-group">
                        <?php echo e(Form::label('description', __('Description'), ['class' => 'form-label text-center'])); ?>

                        <textarea id="edit_meta_description" name="edit_meta_description" class="form-control" oninput="getWordCount('edit_meta_description','edit_meta_description_count','12.9px arial')" rows="3" <?php echo e(system_setting('seo_settings') != '' && system_setting('seo_settings') == 1 ? 'required' : ''); ?>><?php echo e($list->meta_description); ?></textarea>
                        <br>
                        <h6 id="edit_meta_description_count">0</h6>
                    </div>

                    
                    <div class="col-md-12 col-sm-12 form-group">
                        <?php echo e(Form::label('keywords', __('Keywords'), ['class' => 'form-label'])); ?>

                        <textarea name="Keywords" id="" class="form-control" rows="3" <?php echo e(system_setting('seo_settings') != '' && system_setting('seo_settings') == 1 ? 'required' : ''); ?>><?php echo e($list->meta_keywords); ?></textarea>
                        (<?php echo e(__('Add Comma Separated Keywords')); ?>)
                    </div>
                </div>

            </div>
        </div>

        
        <div class="col-md-12" id="outdoor_facility">
            <div class="card">
                <h3 class="card-header"><?php echo e(__('Near By Places')); ?></h3>
                <hr>
                <div class="card-body">
                    <div class="row">
                        <?php $__currentLoopData = $facility; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class='col-md-3  form-group'>
                                <?php echo e(Form::label('description', $value->name, ['class' => 'form-check-label'])); ?>

                                <?php if(count($value->assign_facilities)): ?>
                                    <?php echo e(Form::text('facility' . $value->id, $value->assign_facilities[0]['distance'], ['class' => 'form-control mt-3', 'placeholder' => 'distance', 'id' => 'dist' . $value->id])); ?>

                                <?php else: ?>
                                    <?php echo e(Form::text('facility' . $value->id, '', ['class' => 'form-control mt-3', 'placeholder' => 'distance', 'id' => 'dist' . $value->id])); ?>

                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-md-12" id="facility">
            <div class="card">
                <h3 class="card-header"><?php echo e(__('Facilities')); ?></h3>
                <hr>
                <?php echo e(Form::hidden('category_count[]', $category, ['id' => 'category_count'])); ?>

                <?php echo e(Form::hidden('parameter_count[]', $parameters, ['id' => 'parameter_count'])); ?>

                <?php echo e(Form::hidden('parameter_add', '', ['id' => 'parameter_add'])); ?>

                <div id="parameter_type" name=parameter_type class="row card-body">
                    <?php $__currentLoopData = $edit_parameters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3 form-group">
                            <?php echo e(Form::label($res->name, $res->name, ['class' => 'form-label col-12'])); ?>


                            
                            <?php if($res->type_of_parameter == 'dropdown'): ?>
                                <select name="<?php echo e('par_' . $res->id); ?>" class="choosen-select form-select form-control-sm" selected=false false name=<?php echo e($res->id); ?>>
                                    <option value=""><?php echo e(__('Select Option')); ?></option>
                                    <?php $__currentLoopData = $res->type_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value); ?>"
                                            <?php echo e($res->assigned_parameter && $res->assigned_parameter->value == $value ? ' selected=selected' : ''); ?>>
                                            <?php echo e($value); ?> </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            <?php endif; ?>

                            
                            <?php if($res->type_of_parameter == 'radiobutton'): ?>
                                <?php $__currentLoopData = $res->type_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <input type="radio" name="<?php echo e('par_' . $res->id); ?>" id="" value=<?php echo e($value); ?> class="form-check-input" <?php echo e($res->assigned_parameter && $res->assigned_parameter->value == $value ? 'checked' : ''); ?>>
                                    <?php echo e($value); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                            
                            <?php if($res->type_of_parameter == 'number'): ?>
                                <input type="number" name="<?php echo e('par_' . $res->id); ?>" id="" class="form-control" value="<?php echo e($res->assigned_parameter  && $res->assigned_parameter != 'null' ? $res->assigned_parameter->value : ''); ?>">
                            <?php endif; ?>

                            
                            <?php if($res->type_of_parameter == 'textbox'): ?>
                                <input type="text" name="<?php echo e('par_' . $res->id); ?>" id="" class="form-control" value="<?php echo e($res->assigned_parameter && $res->assigned_parameter->value != 'null' ? $res->assigned_parameter->value : ''); ?>">
                            <?php endif; ?>

                            
                            <?php if($res->type_of_parameter == 'textarea'): ?>
                                <textarea name="<?php echo e('par_' . $res->id); ?>" id="" class="form-control" cols="30" rows="3" value="<?php echo e($res->assigned_parameter && $res->assigned_parameter->value != 'null' ? $res->assigned_parameter->value : ''); ?>"><?php echo e($res->assigned_parameter && $res->assigned_parameter->value != 'null' ? $res->assigned_parameter->value : ''); ?></textarea>
                            <?php endif; ?>

                            
                            <?php if($res->type_of_parameter == 'checkbox'): ?>
                                <?php $__currentLoopData = $res->type_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <input type="checkbox" name="<?php echo e('par_' . $res->id . '[]'); ?>" id="" class="form-check-input" value=<?php echo e($value); ?> <?php echo e(!empty($res->assigned_parameter->value) && in_array($value, $res->assigned_parameter->value) ? 'Checked' : ''); ?>><?php echo e($value); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                            
                            <?php if($res->type_of_parameter == 'file'): ?>
                                <?php if(!empty($res->assigned_parameter->value)): ?>
                                    <a href="<?php echo e(url('') . config('global.IMG_PATH') . config('global.PARAMETER_IMG_PATH') . '/' . $res->assigned_parameter->value); ?>" class="text-center col-12" style="text-align: center"> Click here to View</a> OR
                                <?php endif; ?>
                                <input type="hidden" name="<?php echo e('par_' . $res->id); ?>" value="<?php echo e($res->assigned_parameter ? $res->assigned_parameter->value : ''); ?>">
                                <input type="file" class='form-control' name="<?php echo e('par_' . $res->id); ?>" id='edit_param_img'>
                            <?php endif; ?>
                        </div>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <div class='col-md-12'>

            <div class="card">
                <h3 class="card-header"><?php echo e(__('Location')); ?></h3>
                <hr>
                <div class="card-body">
                    <div class="row">
                        
                        <div class='col-md-6'>
                            
                            <div class="card col-md-12" id="map" style="height: 90%">
                                <!-- Google map -->
                            </div>
                        </div>

                        
                        <div class='col-md-6'>
                            <div class="row">

                                
                                <div class="col-md-12 col-12 form-group mandatory">
                                    <?php echo e(Form::label('city', __('City'), ['class' => 'form-label col-12 '])); ?>

                                    <?php echo Form::hidden('city', isset($list->city) ? $list->city : '', ['class' => 'form-control ', 'id' => 'city']); ?>

                                    <input id="searchInput" value="<?php echo e(isset($list->city) ? $list->city : ''); ?>"  class="controls form-control" type="text" placeholder="<?php echo e(__('City')); ?>" required>
                                    
                                </div>

                                
                                <div class="col-md-6 form-group mandatory">
                                    <?php echo e(Form::label('country', __('Country'), ['class' => 'form-label col-12 '])); ?>

                                    <?php echo e(Form::text('country', isset($list->country) ? $list->country : '', ['class' => 'form-control ', 'placeholder' => 'country', 'id' => 'country', 'required' => true])); ?>

                                </div>

                                
                                <div class="col-md-6 form-group mandatory">
                                    <?php echo e(Form::label('state', __('State'), ['class' => 'form-label col-12 '])); ?>

                                    <?php echo e(Form::text('state', isset($list->state) ? $list->state : '', ['class' => 'form-control ', 'placeholder' => 'State', 'id' => 'state', 'required' => true])); ?>

                                </div>


                                
                                <?php echo Form::hidden('latitude', isset($list->latitude) ? $list->latitude : '', ['class' => 'form-control ', 'id' => 'latitude', 'step' => 'any']); ?>

                                

                                
                                <?php echo Form::hidden('longitude', isset($list->longitude) ? $list->longitude : '', ['class' => 'form-control ', 'id' => 'longitude', 'step' => 'any']); ?>

                                

                                
                                <div class="col-md-12 col-12 form-group mandatory">
                                    <?php echo e(Form::label('address', __('Client Address'), ['class' => 'form-label col-12 '])); ?>

                                    <?php echo e(Form::textarea('client_address', isset($list->client_address) ? $list->client_address : (system_setting('company_address') ?? ""), ['class' => 'form-control ', 'placeholder' => 'Client Address', 'rows' => '4', 'id' => 'client-address', 'autocomplete' => 'off', 'required' => 'true'])); ?>

                                </div>

                                
                                <div class="col-md-12 col-12 form-group mandatory">
                                    <?php echo e(Form::label('address', __('Address'), ['class' => 'form-label col-12 '])); ?>

                                    <?php echo e(Form::textarea('address', isset($list->address) ? $list->address : '', ['class' => 'form-control ', 'placeholder' => 'Address', 'rows' => '4', 'id' => 'address', 'autocomplete' => 'off', 'required' => 'true'])); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header"><?php echo e(__('Images')); ?></h3>
                <hr>
                <div class="card-body">
                    <div class="row">
                        
                        <div class="col-md-3 col-sm-12 form-group mandatory card title_card">
                            <?php echo e(Form::label('filepond_title', __('Title Image'), ['class' => 'form-label col-12 '])); ?>

                            <input type="file" class="filepond" id="filepond_title" name="title_image" <?php echo e($list->title_image == '' ? 'required' : ''); ?>>
                            <?php if($list->title_image): ?>
                                <div class="card1 title_img">
                                    <img src="<?php echo e($list->title_image); ?>" alt="Image" class="card1-img">
                                </div>
                            <?php endif; ?>
                        </div>

                        
                        <div class="col-md-3 col-sm-12 card">
                            <?php echo e(Form::label('filepond_3d', __('3D Image'), ['class' => 'form-label col-12 '])); ?>

                            <input type="file" class="filepond" id="filepond_3d" name="3d_image">
                            <?php if($list->threeD_image): ?>
                                <div class="card1 3d_img">
                                    <img src="<?php echo e($list->threeD_image); ?>" alt="Image" class="card1-img" id="3d_img">
                                </div>
                            <?php endif; ?>
                        </div>

                        
                        <div class="col-md-3 col-sm-12 ">
                            <div class="row card" style="margin-bottom:0;">
                                <?php echo e(Form::label('filepond2', __('Gallary Images'), ['class' => 'form-label col-12 '])); ?>

                                <input type="file" class="filepond" id="filepond2" name="gallery_images[]" multiple>
                            </div>
                            <div class="row mt-0">
                                <?php $i = 0; ?>
                                <?php if(!empty($list->gallery)): ?>
                                    <?php $__currentLoopData = $list->gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-6 col-sm-12" id='<?php echo e($row->id); ?>'>
                                            <div class="card1" style="height:90%;">

                                                <img src="<?php echo e(url('') . config('global.IMG_PATH') . config('global.PROPERTY_GALLERY_IMG_PATH') . $list->id . '/' . $row->image); ?>"
                                                    alt="Image" class="card1-img">
                                                <button data-rowid="<?php echo e($row->id); ?>"
                                                    class="RemoveBtn1 RemoveBtngallary">x</button>
                                            </div>
                                        </div>

                                        <?php $i++; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <?php echo e(Form::label('video_link', __('Video Link'), ['class' => 'form-label col-12 '])); ?>

                            <?php echo e(Form::text('video_link', isset($list->video_link) ? $list->video_link : '', ['class' => 'form-control ', 'placeholder' => 'Video Link', 'id' => 'address', 'autocomplete' => 'off'])); ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header"><?php echo e(__('accesibility')); ?></h3>
                <hr>
                <div class="card-body">
                    <div class="col-sm-12 col-md-12  col-xs-12 d-flex">
                        <label class="col-sm-1 form-check-label mandatory mt-3 "><?php echo e(__('Is Private?')); ?></label>

                        <div class="form-check form-switch mt-3">

                            <input type="hidden" name="is_premium" id="is_premium"
                                value=" <?php echo e($list->is_premium ? 1 : 0); ?>">
                            <input class="form-check-input" type="checkbox" role="switch"
                                <?php echo e($list->is_premium ? 'checked' : ''); ?> id="is_premium_switch">

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class='col-md-12 d-flex justify-content-end mb-3'>
            <input type="submit" class="btn btn-primary" value="save">
            &nbsp;
            &nbsp;

            <button class="btn btn-secondary" type="button" onclick="formname.reset();"><?php echo e(__('Reset')); ?></button>
        </div>
        <?php echo Form::close(); ?>


    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?libraries=places&key=<?php echo e(env('PLACE_API_KEY')); ?>&callback=initMap"
        async defer></script>

    <script>
        function initMap() {
            var latitude = parseFloat($('#latitude').val());
            var longitude = parseFloat($('#longitude').val());
            var map = new google.maps.Map(document.getElementById('map'), {

                center: {
                    lat: latitude,
                    lng: longitude
                },


                zoom: 13
            });
            var marker = new google.maps.Marker({
                position: {
                    lat: latitude,
                    lng: longitude
                },
                map: map,
                draggable: true,
                title: 'Marker Title'
            });
            google.maps.event.addListener(marker, 'dragend', function(event) {
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    'latLng': event.latLng
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            var address_components = results[0].address_components;
                            var city, state, country, full_address;

                            for (var i = 0; i < address_components.length; i++) {
                                var types = address_components[i].types;
                                if (types.indexOf('locality') != -1) {
                                    city = address_components[i].long_name;
                                } else if (types.indexOf('administrative_area_level_1') != -1) {
                                    state = address_components[i].long_name;
                                } else if (types.indexOf('country') != -1) {
                                    country = address_components[i].long_name;
                                }
                            }

                            full_address = results[0].formatted_address;

                            // Do something with the city, state, country, and full address
                            $('#searchInput').val(city);
                            $('#city').val(city);
                            $('#country').val(country);
                            $('#state').val(state);
                            $('#address').val(full_address);
                            $('#latitude').val(event.latLng.lat());
                            $('#longitude').val(event.latLng.lng());

                        } else {
                            console.log('No results found');
                        }
                    } else {
                        console.log('Geocoder failed due to: ' + status);
                    }
                });
            });
            var input = document.getElementById('searchInput');
            // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.bindTo('bounds', map);

            var infowindow = new google.maps.InfoWindow();
            var marker = new google.maps.Marker({
                map: map,
                anchorPoint: new google.maps.Point(0, -29)
            });
            autocomplete.addListener('place_changed', function() {
                infowindow.close();
                marker.setVisible(false);
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    window.alert("Autocomplete's returned place contains no geometry");
                    return;
                }

                // If the place has a geometry, then present it on a map.
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);
                }
                marker.setIcon(({
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(35, 35)
                }));
                marker.setPosition(place.geometry.location);
                marker.setVisible(true);

                var address = '';
                if (place.address_components) {
                    address = [
                        (place.address_components[0] && place.address_components[0].short_name || ''),
                        (place.address_components[1] && place.address_components[1].short_name || ''),
                        (place.address_components[2] && place.address_components[2].short_name || '')
                    ].join(' ');
                }

                infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
                infowindow.open(map, marker);

                // Location details
                for (var i = 0; i < place.address_components.length; i++) {
                    console.log(place);

                    if (place.address_components[i].types[0] == 'locality') {
                        $('#city').val(place.address_components[i].long_name);


                    }
                    if (place.address_components[i].types[0] == 'country') {
                        $('#country').val(place.address_components[i].long_name);


                    }
                    if (place.address_components[i].types[0] == 'administrative_area_level_1') {
                        console.log(place.address_components[i].long_name);
                        $('#state').val(place.address_components[i].long_name);


                    }
                }
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();
                $('#address').val(place.formatted_address);
                $('#latitude').val(place.geometry.location.lat());
                $('#longitude').val(place.geometry.location.lng());
            });
        }

        $(document).ready(function() {
            if ($('input[name="property_type"]:checked').val() == 0) {
                $('#duration').hide();
                $('#price_duration').removeAttr('required');
            } else {
                $('#duration').show();

            }
            getWordCount("edit_meta_title", "edit_meta_title_count", "19.9px arial");
            getWordCount("edit_meta_description", "edit_meta_description_count", "12.9px arial");

        });
        $('input[name="property_type"]').change(function() {
            // Get the selected value
            var selectedType = $('input[name="property_type"]:checked').val();

            // Perform actions based on the selected value

            if (selectedType == 1) {
                $('#duration').show();
                $('#price_duration').attr('required', 'true');
            } else {
                $('#duration').hide();
                $('#price_duration').removeAttr('required');
            }
        });
        $(".RemoveBtngallary").click(function(e) {
            e.preventDefault();
            var id = $(this).data('rowid');
            Swal.fire({
                title: 'Are You Sure Want to Remove This Image',
                icon: 'error',
                showDenyButton: true,

                confirmButtonText: 'Yes',
                denyCanceButtonText: `No`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?php echo e(route('property.removeGalleryImage')); ?>",

                        type: "POST",
                        data: {
                            '_token': "<?php echo e(csrf_token()); ?>",
                            "id": id
                        },
                        success: function(response) {

                            if (response.error == false) {
                                Toastify({
                                    text: 'Image Delete Successful',
                                    duration: 6000,
                                    close: !0,
                                    backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)"
                                }).showToast();
                                $("#" + id).html('');
                            } else if (response.error == true) {
                                Toastify({
                                    text: 'Something Wrong !!!',
                                    duration: 6000,
                                    close: !0,
                                    backgroundColor: '#dc3545' //"linear-gradient(to right, #dc3545, #96c93d)"
                                }).showToast()
                            }
                        },
                        error: function(xhr) {}
                    });
                }
            })

        });
        $(document).on('click', '#filepond_3d', function(e) {

            $('.3d_img').hide();
        });
        $(document).on('click', '#filepond_title', function(e) {

            $('.title_img').hide();
        });
        jQuery(document).ready(function() {
            initMap();

            $('#map').append('<iframe src="https://maps.google.com/maps?q=' + $('#latitude').val() + ',' + $(
                    '#longitude').val() +
                '&hl=en&amp;z=18&amp;output=embed" height="375px" width="800px"></iframe>');
        });
        $(document).ready(function() {
            $('.parsley-error filled,.parsley-required').attr("aria-hidden", "true");
            $('.parsley-error filled,.parsley-required').hide();

        });
        $(document).ready(function() {



            $("#is_premium_switch").on('change', function() {
                $("#is_premium_switch").is(':checked') ? $("#is_premium").val(1) : $(
                        "#is_premium")
                    .val(0);
            });

            FilePond.registerPlugin(FilePondPluginImagePreview, FilePondPluginFileValidateSize,
                FilePondPluginFileValidateType);

            $('#meta_image').filepond({
                credits: null,
                allowFileSizeValidation: "true",
                maxFileSize: '3KB',
                labelMaxFileSizeExceeded: 'File is too large',
                labelMaxFileSize: 'Maximum file size is {filesize}',
                allowFileTypeValidation: true,
                acceptedFileTypes: ['image/*'],
                labelFileTypeNotAllowed: 'File of invalid type',
                fileValidateTypeLabelExpectedTypes: 'Expects {allButLastType} or {lastType}',
                storeAsFile: true,
                pdfComponentExtraParams: 'toolbar=0&navpanes=0&scrollbar=0&view=fitH',

            });
        });
    </script>
    <style>
        .error-message {
            color: #dc3545;
            margin-top: 5px;
            font-size: 15px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/property/edit.blade.php ENDPATH**/ ?>