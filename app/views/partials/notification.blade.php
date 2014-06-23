@if (isset($notifications) || Session::has('notifications'))
    <?php $notifications = (isset($notifications)) ? $notifications : Session::get('notifications'); ?>
    @if (isset($notifications['success']))
        <div class="notify-success notification">
            <i class="fa fa-check fa-lg"></i> {{ $notifications['success'] }}
            <a><i class="fa fa-times dismiss"></i></a>
        </div>
    @endif

<script>
    $(document).ready(function() {
        $('.dismiss').click(function() {
            $('.notification').hide('fast');
        });
        $('.notification').click(function() {
            $('.notification').hide('fast');
        });
    });
</script>
@endif