<?php
namespace App\Helpers;
 
class HandleResponse {
    public static function jsonResponse($case) {
        switch ($case) {
            case 'wrong_creds':
                return response()->json([
                    'error' => 'Wrong credentials',
                    'message' => 'Check email and password',
                    'status' => 'error'
                ]);
                break;
            
            case 'auth_error':
                return response()->json([
                    'error' => 'Authentication Error',
                    'message' => 'Some error occured',
                    'status' => 'error'
                ]);
                break;   
            
            case 'register_error':
                return response()->json([
                    'error' => 'Error !!',
                    'message' => 'Some error occured',
                    'status' => 'error'
                ]);
                break;  
        
            case 'register_success':
                return response()->json([
                    'error' => 'YeeHaa !!',
                    'message' => 'Account created successfully',  
                    'status' => 'success'
                ]);
                break;  
        
            case 'poll_create_error':
                return response()->json([
                    'error' => 'Oops !!',
                    'message' => 'Poll couldn\'t be created',  
                    'status' => 'error'
                ]);
                break; 
        
            case 'poll_create_success':
                return response()->json([
                    'error' => 'YeeHaa !!',
                    'message' => 'Poll created successfully',  
                    'status' => 'success'
                ]);
                break; 
            default:
                # code...
                break;
        }
    }
}