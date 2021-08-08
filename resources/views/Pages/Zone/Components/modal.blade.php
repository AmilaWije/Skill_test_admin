<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="exampleModalLabel">
                    Create Zone</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('zones.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>Zone Code<sup class="text-danger">*</sup></b> </label>
                                <input id="inp_name" class="form-control get-title" type="text" name="code"
                                    placeholder="Enter Zone Code">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="intro"><b>Zone Long Description<sup class="text-danger">*</sup></b></label>
                                <textarea id="long" placeholder="Address" class="form-control"
                                    name="long_des" rows="3"></textarea>
                                <span class="text-danger error " id="descriptionMsg"></span>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>Short Description<sup class="text-danger">*</sup></b> </label>
                                <input id="inp_name" class="form-control get-title" type="text" name="short_des"
                                    placeholder="Enter Short Description">
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
        $(document).ready(function() {
            CKEDITOR.replace('long');
        });
    </script>
@endpush