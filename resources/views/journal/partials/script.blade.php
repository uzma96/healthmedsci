@section('script')
    <!-- stacked-graph -->
    {{--<script type="text/javascript" src="assets/journal/js/raphael.js"></script>--}}
    {{--<script type="text/javascript" src="assets/journal/js/jquery.enumerable.js"></script>--}}
    {{--<script type="text/javascript" src="assets/journal/js/jquery.tufte-graph.js"></script>--}}
    <script type="text/javascript">
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>
    <!-- //stacked-graph -->
    <!-- script for marque -->
    <script>
        $('.marquee').marquee({
            gap: 100,
            delayBeforeStart: 0,
            direction: 'left',
            duplicated: true,
            pauseOnHover: true
        });
    </script>

    <!-- //script for marque -->
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/journal/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //Bootstrap Core JavaScript -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function () {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            $().UItoTop({easingType: 'easeOutQuart'});

        });

        $( document ).ajaxStart(function() {
            $( ".pre-loading" ).show();
        });
        $( document ).ajaxComplete(function() {
            $( ".pre-loading" ).hide();
        });
        $( document ).ajaxError(function() {
            $( ".pre-loading" ).hide();
        });
    </script>
    <!-- //here ends scrolling icon -->
@show