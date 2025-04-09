<?php

namespace App;

trait ApiResponse
{
    protected function successResponse($data,$message = "Success",$status = 200){
        return response()->json([
            'success' => true,
        'message' => $message,
            'data' => $data
        ],$status);
    }
    protected function createdResponse($data,$message = "Success"){
        return response()->json([
            'success' => true,
        'message' => $message,
            'data' => $data
        ],201);
    }
    protected function errorResponse($message,$status = 400){
        return response()->json([
            'success' => false,
            'message' => $message,
        ],$status);
    }
}
