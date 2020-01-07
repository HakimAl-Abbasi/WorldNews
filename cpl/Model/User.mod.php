<?php
class User_Model
{
    const GET_ALL_USERS = 'SELECT *  FROM users';
    const GET_ALL_USER_ID ='SELECT * FROM users WHERE User_ID =?';










    // INSERT TO USERS TABLE
    const INSERT_INTO_USERS = 'INSERT INTO users
                                    (User_ID,Username,User_Email,Password,Full_Name,User_phone)
                                    VALUES (:Ca_name,:create_by,:create_date,:updates,:create_status,:parent)';




}