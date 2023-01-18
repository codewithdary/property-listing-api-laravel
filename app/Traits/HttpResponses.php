<?php

namespace App\Traits;

trait HttpResponses {

    /**
     * @param $data
     * @param string|null $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function success($data, string $message = null, int $code = 200)
    {
        return response()->json([
            'status' => 'Request was successful.',
            'message' => $message,
            'data' => $data
        ], $code);
    }

    /**
     * @param $data
     * @param string|null $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function error($data, string $message = null, int $code)
    {
        return response()->json([
            'status' => 'An error has occurred...',
            'message' => $message,
            'data' => $data
        ], $code);
    }
}
