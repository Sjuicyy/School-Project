<form action="xxx.php" method="POST" enctype="multipart/form-data">
    <div class="card-body inner-card">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="form-group"> <label for="Mobile-Number">Full Name</label> <input type="text" name="name"
                        value="<?php echo $data['Name']; ?>" class="form-control" id="Mobile-Number" placeholder="">
                </div>
                <div class="form-group"> <label for="Mobile-Number">Mobile Number</label> <input type="number"
                        name="phone" value="<?php echo $data['Contact']; ?>" class="form-control" id="Mobile-Number"
                        placeholder=""> </div>
                <div class="form-group"> <label for="Fname">Father's Name</label> <input type="text" name="fathername"
                        value="<?php echo $data['Fname']; ?>" class="form-control" id="Fname" placeholder=""> </div>
                <div class="form-group"> <label for="Address">Address</label><input type="text" name="address"
                        value="<?php echo $data['Address']; ?>" class="form-control" id="Address" placeholder=""> </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="form-group"> <label for="batch">Batch</label>
                        <select name="batch" class="form-control">
                            <option>
                                <?php echo $data['Batch']; ?>
                            </option>
                            <option>2012</option>
                            <option>2013</option>
                            <option>2014</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="form-group"> <label for="profession">Profession</label> <input name="profession"
                            value="<?php echo $data['Profession']; ?>" class="form-control">
                        </input>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="form-group"> <label for="Mobile-Number">Facebook(URL:)</label>
                        <input type="text" name="facebook" value="<?php echo $data['Facebook']; ?>" class="form-control"
                            id="Mobile-Number" placeholder="">
                    </div>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="form-group files"><label class="Photo">Upload Your Photo
                        </label>
                        <input type="file" name="file" id="file" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10 col-12">
                    <div class="form-group"> <label for="About">About</label> <input style="min-height: 100px;"
                            name="about" value="<?php echo $data['About']; ?>" class="form-control rounded-0" id="About"
                            rows="5">
                    </div>
                    <div class="row justify-content-end mb-4">
                        <div class="col-lg-4 col-auto ">

                            <input type="submit" value="hello" name="submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>