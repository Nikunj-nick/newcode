<?php $__env->startSection('title'); ?>
    <?php echo e(__('Add Property')); ?>

<?php $__env->stopSection(); ?>
<!-- add before </body> -->


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
                            <?php echo e(__('Add')); ?>

                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo Form::open(['route' => 'property.store', 'data-parsley-validate', 'id' => 'myForm', 'files' => true]); ?>

    <div class='row'>
        <div class='col-md-6'>
            <div class="card">
                <h3 class="card-header"> <?php echo e(__('Details')); ?></h3>
                <hr>

                
                <div class="card-body">
                    <div class="col-md-12 col-12 form-group mandatory">
                        <?php echo e(Form::label('category', __('Category'), ['class' => 'form-label col-12 '])); ?>

                        <select name="category" class="form-select form-control-sm" data-parsley-minSelect='1' id="category" required>
                            <option value="" selected><?php echo e(__('Choose Category')); ?></option>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($row->id); ?>" data-parametertypes='<?php echo e($row->parameter_types); ?>'>
                                    <?php echo e($row->category); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    
                    <div class="col-md-12 col-12 form-group mandatory">
                        <?php echo e(Form::label('title', __('Title'), ['class' => 'form-label col-12 '])); ?>

                        <?php echo e(Form::text('title', '', [
                            'class' => 'form-control ',
                            'placeholder' => 'Title',
                            'required' => 'true',
                            'id' => 'title',
                        ])); ?>

                    </div>

                    
                    <div class="col-md-12 col-12 form-group mandatory">
                        <?php echo e(Form::label('description', __('Description'), ['class' => 'form-label col-12 '])); ?>

                        <?php echo e(Form::textarea('description', '', [
                            'class' => 'form-control mb-3',
                            'rows' => '5',
                            'id' => '',
                            'required' => 'true',
                            'placeholder' => __('Description')
                        ])); ?>

                    </div>

                    
                    <div class="col-md-12 col-12  form-group  mandatory">
                        <div class="row">
                            <?php echo e(Form::label('', __('Property Type'), ['class' => 'form-label col-12 '])); ?>


                            
                            <div class="col-md-6">
                                <?php echo e(Form::radio('property_type', 0, null, [
                                    'class' => 'form-check-input',
                                    'id' => 'property_type',
                                    'required' => true,
                                    'checked' => true
                                ])); ?>

                                <?php echo e(Form::label('property_type', __('For Sell'), ['class' => 'form-check-label'])); ?>

                            </div>
                            
                            <div class="col-md-6">
                                <?php echo e(Form::radio('property_type', 1, null, [
                                    'class' => 'form-check-input',
                                    'id' => 'property_type',
                                    'required' => true,
                                ])); ?>

                                <?php echo e(Form::label('property_type', __('For Rent'), ['class' => 'form-check-label'])); ?>


                            </div>
                        </div>
                    </div>

                    
                    <div class="col-md-12 col-12 form-group mandatory" id='duration'>
                        <?php echo e(Form::label('Duration', __('Duration For Price'), ['class' => 'form-label col-12 '])); ?>

                        <select name="price_duration" id="price_duration" class="choosen-select form-select form-control-sm" data-parsley-minSelect='1'>
                            <option value="Daily">Daily</option>
                            <option value="Monthly">Monthly</option>
                            <option value="Yearly">Yearly</option>
                            <option value="Quarterly">Quarterly</option>
                        </select>
                    </div>

                    
                    <div class="control-label col-12 form-group mt-2">
                        <?php echo e(Form::label('price', __('Price') . '(' . $currency_symbol . ')', ['class' => 'form-label col-12 '])); ?>

                        <?php echo e(Form::number('price', '', [
                            'class' => 'form-control mt-1 ',
                            'placeholder' => trans('Price'),
                            'required' => 'true',
                            'min' => '1',
                            'id' => 'price',
                        ])); ?>

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

                        <textarea id="meta_title" name="meta_title" class="form-control" oninput="getWordCount('meta_title','meta_title_count','12.9px arial')" rows="2" style="height: 75px" placeholder="<?php echo e(__('Title')); ?>"></textarea>
                        <br>
                        <h6 id="meta_title_count">0</h6>
                    </div>

                    
                    <div class="col-md-6 col-sm-12 form-group card">
                        <?php echo e(Form::label('image', __('Image'), ['class' => 'form-label'])); ?>

                        <input type="file" name="meta_image" id="meta_image" class="filepond from-control" placeholder="<?php echo e(__('Image')); ?>">
                        <div class="img_error"></div>
                    </div>

                    
                    <div class="col-md-12 col-sm-12 form-group">
                        <?php echo e(Form::label('description', __('Description'), ['class' => 'form-label text-center'])); ?>

                        <textarea id="meta_description" name="meta_description" class="form-control" oninput="getWordCount('meta_description','meta_description_count','12.9px arial')" rows="3" placeholder="<?php echo e(__('Description')); ?>"></textarea>
                        <br>
                        <h6 id="meta_description_count">0</h6>
                    </div>

                    
                    <div class="col-md-12 col-sm-12 form-group">
                        <?php echo e(Form::label('keywords', __('Keywords'), ['class' => 'form-label'])); ?>

                        <textarea name="keywords" id="" class="form-control" rows="3" placeholder="<?php echo e(__('Keywords')); ?>"></textarea>
                        (add comma separated keywords)
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
                                <?php echo e(Form::checkbox($value->id, $value->name, false, ['class' => 'form-check-input', 'id' => 'chk' . $value->id])); ?>

                                <?php echo e(Form::label('description', $value->name, ['class' => 'form-check-label'])); ?>

                                <?php echo e(Form::text('facility' . $value->id, '', [
                                    'class' => 'form-control mt-3',
                                    'placeholder' => 'distance',
                                    'id' => 'dist' . $value->id,
                                ])); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12" id="facility">
            <div class="card">

                <h3 class="card-header"> <?php echo e(__('Facilities')); ?></h3>
                <hr>
                <?php echo e(Form::hidden('category_count[]', $category, ['id' => 'category_count'])); ?>

                <?php echo e(Form::hidden('parameter_count[]', $parameters, ['id' => 'parameter_count'])); ?>

                <?php echo e(Form::hidden('facilities[]', $facility, ['id' => 'facilities'])); ?>


                <?php echo e(Form::hidden('parameter_add', '', ['id' => 'parameter_add'])); ?>

                <div id="parameter_type" class="row card-body"></div>

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

                                    <?php echo Form::hidden('city', '', ['class' => 'form-control ', 'id' => 'city']); ?>

                                    <input id="searchInput" class="controls form-control" type="text" placeholder="<?php echo e(__('City')); ?>" required>
                                    
                                </div>
                                <div class="col-md-6 form-group mandatory">
                                    <?php echo e(Form::label('country', __('Country'), ['class' => 'form-label col-12 '])); ?>

                                    <?php echo e(Form::text('country', '', ['class' => 'form-control ', 'placeholder' => 'Country', 'id' => 'country', 'required' => true])); ?>

                                </div>
                                <div class="col-md-6 form-group mandatory">
                                    <?php echo e(Form::label('state', __('State'), ['class' => 'form-label col-12 '])); ?>

                                    <?php echo e(Form::text('state', '', ['class' => 'form-control ', 'placeholder' => 'State', 'id' => 'state', 'required' => true])); ?>

                                </div>
                                <?php echo Form::hidden('latitude', '', ['class' => 'form-control ', 'id' => 'latitude', 'step' => 'any']); ?>

                                <?php echo Form::hidden('longitude', '', ['class' => 'form-control ', 'id' => 'longitude', 'step' => 'any']); ?>

                                <div class="col-md-12 col-12 form-group mandatory">
                                    <?php echo e(Form::label('address', 'Client Address', ['class' => 'form-label col-12 '])); ?>

                                    <?php echo e(Form::textarea('client_address', system_setting('company_address') ?? "", [
                                        'class' => 'form-control ',
                                        'placeholder' => 'Client Address',
                                        'rows' => '4',
                                        'id' => 'client-address',
                                        'autocomplete' => 'off',
                                        'required' => 'true',
                                    ])); ?>

                                </div>
                                <div class="col-md-12 col-12 form-group mandatory">
                                    <?php echo e(Form::label('address', __('Address'), ['class' => 'form-label col-12 '])); ?>

                                    <?php echo e(Form::textarea('address', '', [
                                        'class' => 'form-control ',
                                        'placeholder' => 'Address',
                                        'rows' => '4',
                                        'id' => 'address',
                                        'autocomplete' => 'off',
                                        'required' => 'true',
                                    ])); ?>

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

                        <div class="col-md-6 col-sm-12">
                            <div class="row">

                                <style>

                                </style>
                                <div class="col-md-6 col-sm-12  form-group mandatory card title_card">
                                    <?php echo e(Form::label('title_image', __('Title Image'), ['class' => 'form-label col-12 '])); ?>


                                    <input type="file" class="filepond" id="filepond_title" name="title_image"
                                        required>
                                </div>

                                <div class="col-md-6 col-sm-12 card">
                                    <?php echo e(Form::label('title_image', __('3D Image'), ['class' => 'form-label col-12 '])); ?>


                                    <input type="file" class="filepond" id="filepond2" name="3d_image">

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12 ">
                            <div class="row card" style="margin-bottom:0;">
                                <?php echo e(Form::label('title_image', __('Gallary Images'), ['class' => 'form-label col-12 '])); ?>


                                <input type="file" class="filepond" id="filepond2" name="gallery_images[]" multiple>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <?php echo e(Form::label('video_link', __('Video Link'), ['class' => 'form-label col-12 '])); ?>

                            <?php echo e(Form::text('video_link', isset($list->video_link) ? $list->video_link : '', [
                                'class' => 'form-control ',
                                'placeholder' => 'Video Link',
                                'id' => 'address',
                                'autocomplete' => 'off',
                            ])); ?>


                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header"><?php echo e(__('accessibility')); ?></h3>
                <hr>
                <div class="card-body">
                    <div class="col-sm-12 col-md-12  col-xs-12 d-flex">
                        <label class="col-sm-1 form-check-label mandatory mt-3 "><?php echo e(__('Is Private?')); ?></label>

                        <div class="form-check form-switch mt-3">

                            <input type="hidden" name="is_premium" id="is_premium" value="0">
                            <input class="form-check-input" type="checkbox" role="switch" id="is_premium_switch">

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class='col-md-12 d-flex justify-content-end mb-3'>
            <input type="submit" class="btn btn-primary" value="save">
            &nbsp;
            &nbsp;

            <button class="btn btn-secondary" type="button" onclick="myForm.reset();"><?php echo e(__('Reset')); ?></button>
        </div>
    </div>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=<?php echo e(env('PLACE_API_KEY')); ?>&callback=initMap" async defer></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // $("#category").val($("#category option:first").val()).trigger('change');

            $('#facility').hide();
            $('#duration').hide();
            $('#price_duration').removeAttr('required');

            // Event handler for radio button change
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
        });

        jQuery(document).ready(function() {

            initMap();

            $('#map').append('<iframe src="https://maps.google.com/maps?q=' + 20.593684 + ',' + 78.96288 +
                '&hl=en&amp;z=18&amp;output=embed" height="375px" width="800px"></iframe>');


            // $('.select2').prepend('<option value="" selected></option>');
        });

        $(document).ready(function() {
            $("#is_premium_switch").on('change', function() {
                $("#is_premium_switch").is(':checked') ? $("#is_premium").val(1) : $(
                        "#is_premium")
                    .val(0);
            });
            getWordCount("meta_title", "meta_title_count", "19.9px arial");
            getWordCount("meta_description", "meta_description_count", "12.9px arial");

            // your code that uses .rules() function
        });
        $('property_type').on('Click', function() {
            console.log("click");
        });





        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -33.8688,
                    lng: 151.2195
                },
                zoom: 13
            });
            var input = document.getElementById('searchInput');

            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.bindTo('bounds', map);

            var infowindow = new google.maps.InfoWindow();
            var marker = new google.maps.Marker({
                draggable: true,

                position: {
                    lat: -33.8688,
                    lng: 151.2195
                },
                map: map,
                anchorPoint: new google.maps.Point(0, -29)
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
            autocomplete.addListener('place_changed', function() {
                infowindow.close();
                marker.setVisible(false);
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    window.alert("Autocomplete's returned place contains no geometry");
                    return;
                }


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
        jQuery(document).ready(function() {

            initMap();
            $('#map').append('<iframe src="https://maps.google.com/maps?q=' + 20.593684 + ',' + 78.96288 +
                '&hl=en&amp;z=18&amp;output=embed" height="375px" width="800px"></iframe>');

            $('.select2').prepend('<option value="" selected></option>');
            $facility = $.parseJSON($('#facilities').val());

            $.each($facility, function(key, value) {

                $('#dist' + value.id).hide();
                $('#chk' + value.id).on('click', function() {

                    if ($('#chk' + value.id).is(':checked')) {
                        $('#dist' + value.id).show();

                    } else {
                        $('#dist' + value.id).hide();

                    }
                });
            });

        });
        $(document).ready(function() {

            FilePond.registerPlugin(FilePondPluginImagePreview, FilePondPluginFileValidateSize,
                FilePondPluginFileValidateType);

            $('#meta_image').filepond({
                credits: null,
                allowFileSizeValidation: "true",
                maxFileSize: '300KB',
                labelMaxFileSizeExceeded: 'File is too large',
                labelMaxFileSize: 'Maximum file size is {filesize}',
                allowFileTypeValidation: true,
                acceptedFileTypes: ['image/*'],
                labelFileTypeNotAllowed: 'File of invalid type',
                fileValidateTypeLabelExpectedTypes: 'Expects {allButLastType} or {lastType}',
                storeAsFile: true,
                allowPdfPreview: true,
                pdfPreviewHeight: 320,
                pdfComponentExtraParams: 'toolbar=0&navpanes=0&scrollbar=0&view=fitH',
                allowVideoPreview: true, // default true
                allowAudioPreview: true, // default true
            });
        });
    </script>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wrteam-dev/ebroker/resources/views/property/create.blade.php ENDPATH**/ ?>