<?php
namespace App\Helpers;
 
class HandleResponse {
    public static function jsonResponse($case, $response='') {
        switch ($case) {
            case 'wrong_creds':
                return response()->json([
                    'title' => 'Wrong credentials',
                    'message' => 'Check email and password',
                    'status' => 'error'
                ]);
                break;
            
            case 'auth_error':
                return response()->json([
                    'title' => 'Authentication Error',
                    'message' => 'Some error occured',
                    'status' => 'error'
                ]);
                break;   
            
            case 'register_error':
                return response()->json([
                    'title' => 'Error !!',
                    'message' => 'Some error occured',
                    'status' => 'error'
                ]);
                break;  
        
            case 'register_success':
                return response()->json([
                    'title' => 'YeeHaa !!',
                    'message' => 'Account created successfully',  
                    'status' => 'success'
                ]);
                break;  
        
            case 'poll_create_error':
                return response()->json([
                    'title' => 'Oops !!',
                    'message' => 'Poll couldn\'t be created',  
                    'status' => 'error'
                ]);
                break; 
        
            case 'poll_create_success':
                return response()->json([
                    'title' => 'YeeHaa !!',
                    'message' => 'Poll created successfully',  
                    'status' => 'success'
                ]);
                break; 
        
            case 'token_invalid':
                return response()->json([
                    'title' => 'Error !!',
                    'message' => 'Authentication error',  
                    'status' => 'error'
                ]);
                break;
        
            case 'token_expired':
                return response()->json([
                    'title' => 'Oops !!',
                    'message' => 'Your login expired, Login again.',  
                    'status' => 'error'
                ]);
                break;
            default:
                return response()->json($response);
                break;
        }
    }
}