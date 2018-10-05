<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="{{asset('js/admin/now-ui-dashboard.js')}}"></script>
<script src="{{asset('js/admin/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeRA7Jo9aBo7E7hrK-XSquHBSKbbkoNuo&libraries=places&callback=initAutocomplete"
        async defer></script>
<script src="{{asset('js/admin/autocomplete.js')}}"></script>
<script src="{{asset('js/admin/avatarPreview.js')}}"></script>
<script>
    $(document).on('click','#active-side-bar li',function () {
        $('#active-side-bar li').removeClass('active');
        $(this).addClass('active');
    });
</script>
