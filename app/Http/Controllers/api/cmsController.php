<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cmsController extends Controller
{

    public function CmsUserRole()
    {

        $user = Auth::guard('api')->user();
        if ($user->role == 'Admin') {
            return response()->json(['success' => "This is Admin User",]);
        } else {
            return response()->json(['error' => "This is not Admin User",]);
        }
    }

    public function saveContent(Request $request)
    {
        // Retrieve the content from the request
        $newContent = $request->input('content');

        // Define the file path
        $filePath = resource_path('views/frontEnd/Pages/cancellation.blade.php');

        // Load the existing content of the file
        $existingContent = file_get_contents($filePath);

        // Find the position of the editable section
        $startTag = '<section id="editable_content">';
        $endTag = '</section>';
        $startPosition = strpos($existingContent, $startTag);
        $endPosition = strpos($existingContent, $endTag, $startPosition);

        // Check if both start and end positions are found
        if ($startPosition !== false && $endPosition !== false) {
            // Extract the editable section content
            $editableContent = substr($existingContent, $startPosition + strlen($startTag), $endPosition - $startPosition - strlen($startTag));

            // Replace the editable content with the new content
            $updatedContent = str_replace($editableContent, $newContent, $existingContent);

            // Save the updated content to the file
            file_put_contents($filePath, $updatedContent);

            // Return a success response
            return response()->json(['success' => true]);
        } else {
            // Return an error response if the editable section is not found
            return response()->json(['success' => false, 'message' => 'Editable section not found']);
        }
    }

    public function agb_save_content(Request $request)
    {
        // Retrieve the content from the request
        $newContent = $request->input('content');

        // Define the file path
        $filePath = resource_path('views/frontEnd/Pages/agb.blade.php');

        // Load the existing content of the file
        $existingContent = file_get_contents($filePath);

        // Find the position of the editable section
        $startTag = '<section id="editable_content">';
        $endTag = '</section>';
        $startPosition = strpos($existingContent, $startTag);
        $endPosition = strpos($existingContent, $endTag, $startPosition);

        // Check if both start and end positions are found
        if ($startPosition !== false && $endPosition !== false) {
            // Extract the editable section content
            $editableContent = substr($existingContent, $startPosition + strlen($startTag), $endPosition - $startPosition - strlen($startTag));

            // Replace the editable content with the new content
            $updatedContent = str_replace($editableContent, $newContent, $existingContent);

            // Save the updated content to the file
            file_put_contents($filePath, $updatedContent);

            // Return a success response
            return response()->json(['success' => true]);
        } else {
            // Return an error response if the editable section is not found
            return response()->json(['success' => false, 'message' => 'Editable section not found']);
        }
    }

    public function lieferbedingungen_save_content(Request $request)
    {

        // Retrieve the content from the request
        $newContent = $request->input('content');

        // Define the file path
        $filePath = resource_path('views/frontEnd/Pages/lieferbedingungen.blade.php');

        // Load the existing content of the file
        $existingContent = file_get_contents($filePath);

        // Find the position of the editable section
        $startTag = '<section id="editable_content">';
        $endTag = '</section>';
        $startPosition = strpos($existingContent, $startTag);
        $endPosition = strpos($existingContent, $endTag, $startPosition);

        // Check if both start and end positions are found
        if ($startPosition !== false && $endPosition !== false) {
            // Extract the editable section content
            $editableContent = substr($existingContent, $startPosition + strlen($startTag), $endPosition - $startPosition - strlen($startTag));

            // Replace the editable content with the new content
            $updatedContent = str_replace($editableContent, $newContent, $existingContent);

            // Save the updated content to the file
            file_put_contents($filePath, $updatedContent);

            // Return a success response
            return response()->json(['success' => true]);
        } else {
            // Return an error response if the editable section is not found
            return response()->json(['success' => false, 'message' => 'Editable section not found']);
        }
    }

    public function Impressum_save_content(Request $request)
    {

        // Retrieve the content from the request
        $newContent = $request->input('content');

        // Define the file path
        $filePath = resource_path('views/frontEnd/Pages/Impressum.blade.php');

        // Load the existing content of the file
        $existingContent = file_get_contents($filePath);

        // Find the position of the editable section
        $startTag = '<section id="editable_content">';
        $endTag = '</section>';
        $startPosition = strpos($existingContent, $startTag);
        $endPosition = strpos($existingContent, $endTag, $startPosition);

        // Check if both start and end positions are found
        if ($startPosition !== false && $endPosition !== false) {
            // Extract the editable section content
            $editableContent = substr($existingContent, $startPosition + strlen($startTag), $endPosition - $startPosition - strlen($startTag));

            // Replace the editable content with the new content
            $updatedContent = str_replace($editableContent, $newContent, $existingContent);

            // Save the updated content to the file
            file_put_contents($filePath, $updatedContent);

            // Return a success response
            return response()->json(['success' => true]);
        } else {
            // Return an error response if the editable section is not found
            return response()->json(['success' => false, 'message' => 'Editable section not found']);
        }
    }
}
