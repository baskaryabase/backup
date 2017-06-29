<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.no</th>
                  <th>Fullname</th>
                  <th>Role</th>
                  <th>Date Joined</th>
                  <th>Email</th>
                  <th>Phone number</th>
                  <th>city</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>

                  <?php foreach ($users['details'] as $key => $value) {
                    # code...
                  ?>
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $value['sc_fullname'] }}</td>
                  <td>{{ $value['role'] }}</td>
                  <td>{{ $value['created_date'] }}</td>
                  <td>{{ $value['sc_email'] }}</td>
                  <td>{{ $value['sc_phone'] }}</td>
                  <td>{{ $value['sc_location'] }}</td>
                  <td><a data-id="{{ $value['id']  }}" onclick="get_followup(this)">Followup</a></td>
                </tr>
              <?php } ?>
                </tbody>
                <tfoot>
                <tr>
             <th>S.no</th>
                  <th>Fullname</th>
                  <th>Role</th>
                  <th>Date Joined</th>
                  <th>Email</th>
                  <th>Phone number</th>
                  <th>city</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>