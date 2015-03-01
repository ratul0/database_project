<!-- Footer ================================================================== -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        Copyright &copy; {{date('Y')}} | Site Version <strong>2.0</strong>
    </div>
    Developed By <strong><a href="http://www.facebook.com/bondhu">Burhan Uddin </a>[Version 1.0]</strong>,<strong><a href="http://www.facebook.com/bondhu">Yousuf Khan Ratul</a>,<a href="http://www.facebook.com/bondhu">Abu Shahriar Ratul</a>[Version 2.0]</strong>
</footer>
<!-- Placed at the end of the document so the pages load faster ============================================= -->



{{HTML::script('js/jquery.min.js')}}
{{HTML::script('bootstrap/js/bootstrap.min.js')}}
{{HTML::script('plugins/slimScroll/jquery.slimScroll.min.js')}}
{{HTML::script('plugins/fastclick/fastclick.min.js')}}
{{HTML::script('dist/js/app.min.js')}}
@yield('script')
