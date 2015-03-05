@extends('layouts.default')

@section('content')

    <form class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Site Settings</legend>

            @include('includes.alert')
            @foreach($siteSettings as $siteSetting)
                @if($siteSetting->key == 'SITE_NAME')
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="sitename">Site Name:*</label>

                        <div class="col-md-6">
                            {{ Form::text('sitename', $siteSetting->value, array('class' => 'form-control','required' => '')) }}
                        </div>
                    </div>
                @endif
                @if($siteSetting->key == 'SITE_META_KEYS')
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="site_meta_key">Site Default Meta Keys:*</label>

                        <div class="col-md-6">
                            {{ Form::text('site_meta_key', $siteSetting->value, array('class' => 'form-control','required' => '')) }}
                        </div>
                    </div>
                @endif
                @if($siteSetting->key == 'SITE_META_DESC')
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="meta_description">Meta Description:*</label>

                        <div class="col-md-6">
                            {{ Form::text('meta_description', $siteSetting->value, array('class' => 'form-control','required' => '')) }}
                        </div>
                    </div>
                @endif
                @if($siteSetting->key == 'LISTING_PER_PAGE')
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="listing_per_page">Listing Per Page:*</label>
                        <div class="col-md-6">
                            {{ Form::text('listing_per_page', $siteSetting->value, array('class' => 'form-control','required' => '')) }}
                        </div>
                    </div>
                    @endif
                    @if($siteSetting->key == 'SITE_EMAIL_ADDRESS')
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="email_id">Default Email Address:*</label>
                            <div class="col-md-6">
                                {{ Form::text('email_id', $siteSetting->value, array('class' => 'form-control','required' => '')) }}
                            </div>
                        </div>
                        @endif
                    @if($siteSetting->key == 'ONLINE')
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="website_online">Website Online:*</label>

                            <div class="col-md-4">
                                <label class="radio-inline" for="website_online-0">
                                    <input type="radio" name="website_online" id="website_online-0" value="Yes"
                                           checked="checked">
                                    Yes
                                </label>
                                <label class="radio-inline" for="website_online-1">
                                    <input type="radio" name="website_online" id="website_online-1" value="No">
                                    No
                                </label>
                            </div>
                        </div>
                        @endif
                    @if($siteSetting->key == 'SLOGAN')
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="siteslogan">Site Slogan:*</label>

                            <div class="col-md-6">
                                {{ Form::text('siteslogan', $siteSetting->value, array('class' => 'form-control','required' => '')) }}
                            </div>
                        </div>
                        @endif
                    @if($siteSetting->key == 'SITE_START_YEAR')
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="site_start_year">Site Start Year:*</label>

                            <div class="col-md-6">
                                {{ Form::text('sitesstart', $siteSetting->value, array('class' => 'form-control','required' => '')) }}
                            </div>
                        </div>
                        @endif
                    @if($siteSetting->key == 'SITE_START_YEAR')
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="global_notice">NOTICE:*</label>

                            <div class="col-md-6">
                                {{ Form::text('notice', $siteSetting->value, array('class' => 'form-control','required' => '')) }}
                            </div>
                        </div>
                        @endif
                    @endforeach

            
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="formSubmit"></label>

                        <div class="col-md-4">
                            <button id="formSubmit" name="formSubmit" class="btn btn-primary">Update</button>
                        </div>
                    </div>


        </fieldset>
    </form>

@stop