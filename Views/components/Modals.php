<div class="modal fade w-100" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3 col-xl-12 col-sm-4">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Insert New Meal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- on loading page -->

            <div id="loadingAjouter" class="">
                <div class="loader m-3"></div>
            </div>
            <form action="../../Models/insert/insert_meal.php" method="POST" enctype="multipart/form-data">
                <div class="col-12 row mb-3 justify-content-center">
                    <div class="col-sm-10 col-xl-4 row text-center justify-content-center align-items-center">
                        <label for="imgs">
                            <img class="col-6" style="border-radius:50%;max-width:100px; min-height:100px"
                                src="https://via.placeholder.com/50" alt="">
                        </label>
                        <input type="file" name="img" id="imgs" style="visibility:hidden">
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="name"><b>Name</b></label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group mb-4">
                    <label for="cat"><b>Categories</b></label>
                    <select class="form-control" name="cat" id="cat">
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                        <option value="3">Category 3</option>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label for="description"><b>Description</b></label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>
                <div class="form-group mb-4">
                    <label for="price"><b>Price</b></label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="submitForms btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>