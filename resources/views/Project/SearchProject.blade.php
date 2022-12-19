    <!-- Searching -->
    <section class="pt-2">
        <div class="container ">
            <div class="modal fade" id="SearchProject" tabindex="-1" aria-labelledby="SearchProject" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="SearchProject">Search</h5> <i class="bi bi-search ms-1"
                                style="font-size:24px"></i>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="#" method="#" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="container">
                                    <form action="#" method="#" enctype="multipart/form-data">
                                        <div class="d-flex col-lg-6 mb-3">
                                            <label for="inputEmail4" class="form-label col-lg-5">Time Worked</label>
                                            <input type="text" id="appt" name="appt" class="form-control col-lg-6"
                                                style="margin-left: 3%;">
                                        </div>
                                        <div class="d-flex col-lg-6 mb-3">
                                            <label for="inputEmail4" class="form-label col-lg-5">Project Group</label>
                                            <select name="status" class="form-select col-lg-6" style="margin-left: 3%;">
                                                <option value="">General Project 1</option>
                                                <option value="">General Project 2</option>
                                                <option value="">General Project 3</option>
                                            </select>
                                        </div>
                                        <div class="d-flex col-lg-6 mb-3">
                                            <label for="inputEmail4" class="form-label col-lg-5">Project</label>
                                            <select name="selectproject" class="form-control col-lg-6"
                                                style="margin-left: 3%;">
                                                <option selected>Pilih Group Project</option>
                                                <option class="form-select col-lg-6 "
                                                    aria-label="Disabled select example" disabled>
                                                    DINKES
                                                <option value="">Project ABCD</option>
                                                </option>
                                                <option class="form-select" aria-label="Disabled select example"
                                                    disabled>
                                                    DISBUDPAR
                                                <option value="">Project DEFG</option>
                                                <option value="">Project EFGH</option>
                                                </option>
                                            </select>
                                        </div>
                                        <div class="d-flex col-lg-6 mb-3">
                                            <label for="inputEmail4" class="form-label col-lg-5">Aplication</label>
                                            <select name="status" class="form-select col-lg-6" style="margin-left: 3%;">
                                                <option selected>Pilih Aplication</option>
                                                <option value=""><i class="bi bi-check-circle"
                                                        style="font-size:20px"></i> Task</option>
                                                <option value="">Milestone</option>
                                                <option value="">Time</option>
                                                <option value="">File</option>
                                                <option value="">Issu Tracker</option>
                                                <option value="">Wiki</option>
                                                <option value="">CRM</option>
                                                <option value="">Calender</option>
                                            </select>
                                        </div>
                                        <div class="d-flex col-lg-6 mb-3">
                                            <label for="inputEmail4" class="form-label col-lg-5">Created By</label>
                                            <select name="status" class="form-select col-lg-6" style="margin-left: 3%;">
                                                <option selected>Pilih User</option>
                                                <option value="">User 1</option>
                                                <option value="">User 2</option>
                                                <option value="">User 3</option>
                                            </select>
                                        </div>
                                        <div class="d-flex col-lg-6 mb-3">
                                            <label for="inputEmail4" class="form-label col-lg-5">User
                                                Assigned/Invited</label>
                                            <select name="status" class="form-select col-lg-6" style="margin-left: 3%;">
                                                <option selected>unassigned</option>
                                                <option value=""><i class="bi bi-check-circle"
                                                        style="font-size:20px"></i> Task</option>
                                                <option value="">Everyone</option>
                                                <option value="">User 1</option>
                                                <option value="">User 2</option>
                                                <option value="">User 3</option>
                                            </select>
                                        </div>
                                        <div class="d-flex col-lg-6 mb-3">
                                            <label for="inputEmail4" class="form-label col-lg-5">Priority</label>
                                            <select name="status" class="form-select col-lg-6" style="margin-left: 3%;">
                                                <option value="">none</option>
                                                <option value="">Low</option>
                                                <option value="">Mediumm</option>
                                                <option value="">High</option>
                                            </select>
                                        </div>
                                        <div class="d-flex col-lg-6 mb-3">
                                            <label for="inputEmail4" class="form-label col-lg-5">Status</label>
                                            <select name="status" class="form-select col-lg-6" style="margin-left: 3%;">
                                                <option value="">No Progres</option>
                                                <option value="">Complated</option>
                                                <option value="">In Progres</option>
                                            </select>
                                        </div>
                                        <div class="d-flex col-lg-6 mb-3">
                                            <label for="inputEmail4" class="form-label col-lg-5">Date Created</label>
                                            <select name="status" class="form-select col-lg-6" style="margin-left: 3%;">
                                                <option selected>Days</option>
                                                <option value="">Last 7 Days</option>
                                                <option value="">Last 30 Days</option>
                                                <option value="">Last 90 Days</option>
                                                <option value="">Last 180 Days</option>
                                                <option value="">Last 365 Days</option>
                                            </select>
                                        </div>
                                        <div class="d-flex col-lg-6 mb-3">
                                            <label for="inputEmail4" class="form-label col-lg-5">Date Update</label>
                                            <select name="status" class="form-select col-lg-6" style="margin-left: 3%;">
                                                <option selected>Days</option>
                                                <option value="">Last 7 Days</option>
                                                <option value="">Last 30 Days</option>
                                                <option value="">Last 90 Days</option>
                                                <option value="">Last 180 Days</option>
                                                <option value="">Last 365 Days</option>
                                            </select>
                                        </div>
                                        <div class="d-flex col-lg-6 mb-3">
                                            <label for="inputEmail4" class="form-label col-lg-5">Due Date</label>
                                            <select name="status" class="form-select col-lg-6" style="margin-left: 3%;">
                                                <option selected>Days</option>
                                                <option value="">Last 7 Days</option>
                                                <option value="">Last 30 Days</option>
                                                <option value="">Last 90 Days</option>
                                                <option value="">Last 180 Days</option>
                                                <option value="">Last 365 Days</option>
                                                <select name="status" class="form-select col-lg-6"
                                                    style="margin-left: 3%;">
                                        </div>
                                        <div class="d-flex col-lg-6 mb-2">
                                            <label for="inputEmail4" class="form-label col-lg-5">Include Archived
                                                List</label>
                                            <div class="form-check form-switch" style="margin-left: 14%;">
                                                <input class=" form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckDefault">
                                            </div>
                                        </div>
                                        <div class="d-flex col-lg-8 mb-2">
                                            <label for="inputEmail4" class="form-label col-lg-5">Include Archived
                                                Project</label>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckDefault">
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Clear
                                    Search</button>
                                <h6>Or</h6>
                                <button type="Submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Searching -->