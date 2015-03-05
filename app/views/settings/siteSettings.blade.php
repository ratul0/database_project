@extends('layouts.default')

@section('content')
    @include('includes.alert')
    <form class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Site Settings</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="sitename">Site Name:*</label>
                <div class="col-md-6">
                    {{--<input id="sitename" name="sitename" type="text"  class="form-control input-md" required="">--}}
                    {{ Form::text('sitename', 'pl', array('class' => 'form-control','required' => '')) }}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="site_meta_key">Site Default Meta Keys:*</label>
                <div class="col-md-6">
                    <textarea class="form-control" id="site_meta_key" name="site_meta_key"></textarea>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="meta_description">Meta Description:*</label>
                <div class="col-md-6">
                    <input id="meta_description" name="meta_description" type="text" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="listing_per_page">Listing Per Page:*</label>
                <div class="col-md-6">
                    <input id="listing_per_page" name="listing_per_page" type="text" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="email_id">Default Email Address:*</label>
                <div class="col-md-6">
                    <input id="email_id" name="email_id" type="text" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="website_online">Website Online:*</label>
                <div class="col-md-4">
                    <label class="radio-inline" for="website_online-0">
                        <input type="radio" name="website_online" id="website_online-0" value="Yes" checked="checked">
                        Yes
                    </label>
                    <label class="radio-inline" for="website_online-1">
                        <input type="radio" name="website_online" id="website_online-1" value="No">
                        No
                    </label>
                </div>
            </div>



            <div class="form-group">
                <label class="col-md-2 control-label" for="siteslogan">Site Slogan:*</label>
                <div class="col-md-6">
                    <input id="siteslogan" name="siteslogan" type="text"  class="form-control input-md" required="">

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="site_start_year">Site Start Year:*</label>
                <div class="col-md-6">
                    <input id="site_start_year" name="site_start_year" type="text"  class="form-control input-md" required="">

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="global_notice">Global Notice:*</label>
                <div class="col-md-6">
                    <textarea class="form-control" id="global_notice" name="global_notice"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="formSubmit"></label>
                <div class="col-md-4">
                    <button id="formSubmit" name="formSubmit" class="btn btn-primary">Update</button>
                </div>
            </div>



        </fieldset>
    </form>

@stop