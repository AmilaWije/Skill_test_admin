<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="exampleModalLabel">
                    Create Territory</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('teritories.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <select class="form-control" name="z_code" id="zone">
                                    <option value=""></option>
                                    @foreach ($zones as $value)
                                        <option value="{{ $value->id }}">{{ $value->code }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <select class="form-control" name="r_code" id="region">
                                    <option value=""></option>
                                    @foreach ($regions as $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>Territory Code<sup class="text-danger">*</sup></b> </label>
                                <input id="inp_name" class="form-control get-title" type="text" name="code"
                                    placeholder="Enter Code">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>Territory Name<sup class="text-danger">*</sup></b> </label>
                                <input id="inp_name" class="form-control get-title" type="text" name="name"
                                    placeholder="Enter Name">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create
                    Zone</button>
                </form>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $("#zone").select2({
            placeholder: "Select Zone Code",
            allowClear: true
        });

        $("#region").select2({
            placeholder: "Select Region Code",
            allowClear: true
        });
    </script>
@endpush
