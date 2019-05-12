<div style="padding: 40px">
    <center><h1> <font size="6" color="green">Manage Address Book</font> </h1></center>
    <br>

    <table class="table table-dark">
        <thead >
        <tr>
            <th scope="col">SN <br/><input ng-model="search.id_categories" class="form-control input-sm" ></th>
            <th scope="col">Category Name<br/><input ng-model="search.categories_name" class="form-control input-sm" ></th>
            <th scope="col">Category Info <br/><input ng-model="search.categories_info" class="form-control input-sm" ></th>

            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>

        <tr scope="row" ng-repeat="(key, value) in categoryList | filter:{id_categories: search.id_categories, categories_name: search.categories_name, categories_info: search.categories_info}">
            <td>@{{key+1}}</td>
            <td>@{{value.categories_name}}</td>
            <td>@{{value.categories_info}}</td>
            <td> <a ng-href="#!/editCategory/@{{value.id_categories}}" class="btn btn-primary"> Edit</a><a style="margin:  5px" ng-click="deleteCategory(value.id_categories)" class="btn btn-danger"> Delete</a></td>



        </tr>

        </tbody>
    </table>
</div>
