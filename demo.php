    <?php
    if(isset($_POST['register']))
    {
        echo extract($_POST);

        $conn = mysqli_connect('localhost','id10426668_rchi_kongu','rchi2019','id10426668_rchi');
        if($conn)
        {

        $sql = 'INSERT INTO `register`(`author_name`, `designation`, `department`, `organization`, `email`, `title`, `specilization`, `noofauthors`, `presentationMode`, `address`, `state`, `country`) VALUES ("'.$author_name.'","'.$Designation.'","'.$department.'","'.$organization.'","'.$email.'","'.$title.'","'.$specilization.'","'.$noofauthors.'","'.$presentationMode.'","'.$address.'","'.$state.'","'.$country.'")';           
        $rows =  mysqli_query($conn,$sql);
        if($rows)
        {
            $show = true; 
            
        }else{
            echo "Error Occured !!!";
            header('Location : http://rchi2019.kongu.edu');
        }
        }
        
    }
    ?>