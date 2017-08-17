<div id="page-wrapper"
<div class="container-fluid">
	<div class="row">
        <div class="col-lg-12">
                    <h1 class="page-header"><span class="glyphicon glyphicon-eye"></span>&nbsp;Inbox</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
            <div class="row reload_blood">
            	<div class="col-sm-12">
                	<table class="table table-bordered">
                    	<thead>
	                        <tr>
                            </tr>
                        	<tr class="active">
                            	<th width="5%">S.No.</th>
                                <th style="text-align:center;">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
						if(isset($result)){
						$i=1;
						foreach($result as $row){?>
                        	<tr>
                            	<td width="5%"><?=$i++?></td>
                                <td><?php echo "";?></td>
                                <td>
                                	<button class="btn btn-danger btn-sm cat_trasher"><span class="glyphicon glyphicon-trash"></span>&nbsp;delete</button>
                                </td>
                            </tr>
                         <?php }}else{?>
							 <tr>
                             	<th colspan="3">No Message</th>
                             </tr>
							 <?php }?>   
                        </tbody>
                    </table>
                </div>
            </div>
    
      </div>
    </div>
</div>