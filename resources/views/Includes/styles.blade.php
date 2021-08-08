<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/jquery-ui.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
<!-- select2 CSS-->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<link href="{{ asset('plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">

<link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- select2 CSS-->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<!-- sptoast Css-->
<link rel="stylesheet" href="{{ asset('assets/css/sptoast.css') }}">
<!-- confirm CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

<style>
    .select2-container--default .select2-selection--single {
        background-color: #fff;
        border-radius: 4px;
        height: calc(1.5em + .94rem + 2px);
        border: 1px solid #ced4da;
        transition: box-shadow .15s ease;
        line-height: 1.5rem;
        font-size: .8125rem;
        padding: .37rem .45rem;
        width: 470px;
    }

    .select2-dropdown {
        box-shadow: 0 1px 3px rgba(50, 50, 93, 0.15), 0 1px 0 rgba(0, 0, 0, 0.02);
        border: 0;
        transition: box-shadow .15s ease;
    }


    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        margin-top: 6px;
    }

    .select2-selection.select2-selection--single {
        border: 1px solid #ced4da;
        font-size: .8125rem;
        height: calc(1.5em + .94rem + 2px);
        line-height: 1.875rem;
    }

    .select2-container--default .select2-selection--multiple {
        background-color: #fff;
        border-radius: 4px;
        border: 1px solid #ced4da;
        transition: box-shadow .15s ease;
        line-height: 1.5rem;
        font-size: .8125rem;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__arrow b {
        margin-top: 6px;
    }

    .select2-selection.select2-selection--multiple {
        transition: box-shadow .15s ease;
        border: 0;
        line-height: 1.5rem;
        font-size: .8125rem;
        line-height: 1.875rem;
    }

    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background-color: #337ab7;
        color: #fff;
    }

</style>

@stack('styles')
