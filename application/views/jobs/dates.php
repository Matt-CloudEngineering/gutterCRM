
 <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>


                    <?php echo form_open(); ?>

                    <div class='form-group'>
                        <script>
                            $( ".datepicker" ).datepicker();
                        </script>

                        <tr>    
                            <td></td>
                            <td>
                                <input type="text" name="date_req" value="" placeholder="Date Requested" class="datepicker" />
                            </td> <!-- should be todays date -->
                            <td><input type='text' name='name'  class='form-control' value='".$custies_item['name']."' ></td> <!-- drop down calender -->
                            <td><input type='text' name='name'  class='form-control' value='".$custies_item['name']."' ></td> <!-- drop down calender, only available on edits? -->
                            <td><input type='text' name='name'  class='form-control' value='".$custies_item['name']."' ></td> <!-- grayed out -->
                            <td><input type='text' name='name'  class='form-control' value='".$custies_item['name']."' ></td>
                            <td><input type='text' name='name'  class='form-control' value='".$custies_item['name']."' ></td>
                            <td><input type='text' name='name'  class='form-control' value='".$custies_item['name']."' ></td>
                        </tr>

                        echo "<td><span style='margin-bottom:5px'>".$custies_item['cust_id']."</span><br/><br/>";

                        echo "<label>Name:</label><input type='text' name='name'  class='form-control' value='".$custies_item['name']."' ><br/>";

                        echo "<label>Street:</label><input type='text' name='street'  class='form-control' value='".$custies_item['street']."' ><br/>";

                        echo "<label>TownZip:</label><input type='text' name='townzip'  class='form-control' value='".$custies_item['townzip']."' ><br/>";

                        echo "<label>phone:</label><input type='text' name='phone'  class='form-control' value='".$custies_item['phone']."' ><br/>";
                        ?>
                        <br>
                        <input class="btn btn-default" type="submit" name="submit" value="Update Customer" />
                        </div>
                    </form>