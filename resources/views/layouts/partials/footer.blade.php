<!-- Scripts -->

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="//code.jquery.com/jquery.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
<script>
    $('#service').select2();
    $('#academy').select2();
    $('#special').select2();
    $('#student').select2();
</script>
</body>
</html>