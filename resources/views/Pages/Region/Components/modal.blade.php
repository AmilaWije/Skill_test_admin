<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="exampleModalLabel">
                    Create Region</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('regions.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <select class="form-control" name="z_code" id="zone">
                                    <option value=""></option>
                                    @foreach ($zones as $value)
                                        <option value="{{$value->id}}">{{$value->code}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>Region Code<sup class="text-danger">*</sup></b> </label>
                                <input id="inp_name" class="form-control get-title" type="text" name="code"
                                    placeholder="Enter Code">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>Region Name<sup class="text-danger">*</sup></b> </label>
                                <input id="inp_name" class="form-control get-title" type="text" name="name"
                                    placeholder="Enter Name">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create
                    Region</button>
                </form>
            </div>
        </div>
    </div>
</div>
@push('styles')
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
@endpush
@push('scripts')
    <script>
        $("#zone").select2({
            placeholder: "Select Zone Code",
            allowClear: true
        });
    </script>
@endpush
