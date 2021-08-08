<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="exampleModalLabel">
                    Create Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>SKU Code<sup class="text-danger">*</sup></b> </label>
                                <input id="inp_name" class="form-control get-title" type="text" name="code"
                                    placeholder="Enter Code">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>SKU Name<sup class="text-danger">*</sup></b> </label>
                                <input id="inp_name" class="form-control get-title" type="text" name="name"
                                    placeholder="Enter Name">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>MRP<sup class="text-danger">*</sup></b> </label>
                                <input id="inp_name" class="form-control get-title" type="number" name="mrp"
                                    placeholder="Enter mrp">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>Distributor Price<sup class="text-danger">*</sup></b> </label>
                                <input id="inp_name" class="form-control get-title" type="text" name="dis_price"
                                    placeholder="Enter Price">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>Volume<sup class="text-danger">*</sup></b> </label>
                                <input id="inp_name" class="form-control get-title" type="text" name="volume"
                                    placeholder="Enter Volume(KG)">
                            </div>
                        </div>

                        {{-- <div class="col-lg-12">
                            <div class="form-group">
                                <select class="form-control" name="" id="zone">
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div> --}}
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create
                    Item</button>
                </form>
            </div>
        </div>
    </div>
</div>
