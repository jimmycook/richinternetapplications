@extends('html')

@section('title')
Cinema Booking
@endsection

@section('body')
<script type="text/javascript">
var user = <?php echo Auth::user()->toJson() ?>
</script>
<div class="container">
    <app></app>
</div>

@endsection
