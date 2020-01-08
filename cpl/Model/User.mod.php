<?php
class User_Model
{
    const GET_ALL_USERS = 'SELECT *  FROM users';
    const GET_ALL_USER_ID ='SELECT * FROM users WHERE User_ID =:User_ID';





    // Delete Users
   const DELETE_USERS_DATA ='DELETE FROM users WHERE User_ID =:User_ID';



/*
'INSERT INTO users (Username,User_Email,Password,Full_Name,User_phone,Register_Date,User_GroupID,User_Status)
                                    VALUES (?,?,?,?,?,?,?,?)';

*/
    // INSERT TO USERS TABLE
    const INSERT_INTO_USERS = 'INSERT INTO users( Username,User_Email,Password,Full_Name,User_Phone,Register_Date,User_GroupID,User_Status) 
VALUES (:Username,:User_Email,:Password,:Full_Name,:User_Phone,:Register_Date,:User_GroupID,:User_Status)';



const UPDATE_USERS_ID ="UPDATE users SET  Username =:,Username,User_Email=:User_Email,Password=:Password,Full_Name,User_phone,Register_Date,User_GroupID,User_Status WHERE User_ID=:User_ID ";


}