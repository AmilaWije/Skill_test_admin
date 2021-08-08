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
                <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>Name<sup class="text-danger">*</sup></b> </label>
                                <input id="inp_name" class="form-control get-title" type="text" name="name"
                                    placeholder="Enter Name">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>NIC<sup class="text-danger">*</sup></b> </label>
                                <input id="inp_name" class="form-control get-title" type="number" name="nic"
                                    placeholder="Enter NIC">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="intro"><b>Address<sup class="text-danger">*</sup></b></label>
                                <textarea placeholder="Address" class="form-control" name="address" rows="3"></textarea>
                                <span class="text-danger error " id="descriptionMsg"></span>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>Mobile<sup class="text-danger">*</sup></b> </label>
                                <input id="inp_name" class="form-control get-title" type="phone" name="mobile"
                                    placeholder="Enter Mobile">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>E-mail<sup class="text-danger">*</sup></b> </label>
                                <input id="inp_name" class="form-control get-title" type="email" name="email"
                                    placeholder="Enter Email">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <select class="form-control" name="gender" id="gender">
                                    <option value=""></option>
                                    <option value="male">Mail</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <select class="form-control" name="t_id" id="territory">
                                    <option value=""></option>
                                    @foreach ($teriitories as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>Username<sup class="text-danger">*</sup></b> </label>
                                <input id="inp_name" class="form-control get-title" type="text" name="username"
                                    placeholder="Enter Username">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for=""><b>E-mail<sup class="text-danger">*</sup></b> </label>
                                <input class="form-control get-title" type="password" name="password"
                                    placeholder="Enter Password">
                            </div>
                        </div>

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create
                    User</button>
                </form>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $("#gender").select2({
            placeholder: "Select Gender",
            allowClear: true
        });

        $("#territory").select2({
            placeholder: "Select Territory",
            allowClear: true
        });
    </script>
@endpush
