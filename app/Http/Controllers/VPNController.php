<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VPNController extends Controller
{
    public function connect(Request $request)
    {
        // Implement your VPN connection logic here
        // Example: exec('command to connect to VPN');
        
        // Wait a moment for the VPN to establish (optional)
        sleep(5); // Adjust the duration as necessary
        
        // Check if a VPN interface is active
        if ($this->isVpnConnected()) {
            $publicIp = $this->getPublicIp();
            
            return response()->json([
                'message' => 'VPN connected successfully!',
                'public_ip' => $publicIp
            ]);
        } else {
            return response()->json([
                'message' => 'No active VPN connection found.',
            ], 400);
        }
    }
    
    
    /**
     * Function to get the current public IP address
     */
    private function getPublicIp()
    {
        $output = shell_exec('curl -4 ifconfig.me 2>/dev/null');
    
        if ($output === null) {
            return 'Error retrieving public IP'; // Handle potential errors
        }
    
        return trim($output); // Return the trimmed output
    }
    
    /**
     * Function to check if a VPN interface is active
     */
    private function isVpnConnected()
    {
        $output = shell_exec('ip route show');
        
        // Check if the output contains any VPN interfaces (tun or tap)
        if (strpos($output, 'tun') !== false || strpos($output, 'tap') !== false) {
            return true;
        }
    
        return false;
    }
    public function spawnMachine()
{
    // Your logic to spawn the machine and retrieve the IP
    $ipAddress = 'ping 10.11.81.118'; // Replace this with actual logic
    return response()->json(['ip' => $ipAddress]);
}

public function checkFlag(Request $request)
    {
        $validated = $request->validate([
            'userInput' => 'required|string',
        ]);

        $expectedFlag = 'MHP{jhjaksb,xkbackhlodscnlkcuxhcyudsbcjyhciudsc}'; // Replace with your actual expected flag

        if ($validated['userInput'] === $expectedFlag) {
            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Incorrect flag.']);
        }
    }




    
}