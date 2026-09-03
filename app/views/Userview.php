<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userview</title>

<style> 
* {
     margin: 0; 
     padding: 0; 
     box-sizing: border-box; 
    } 
body { 
    font-family: Arial, Helvetica, sans-serif; 
    background: #f4f6f9; 
    color: #333; 
    padding: 40px; 
} 
.container { 
    max-width: 1100px; 
    margin: 0 auto; } 
.header {
     background: #ffffff; 
     padding: 25px 30px; 
     border-radius: 12px; 
     margin-bottom: 25px; 
     box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08); } 
.header h1 { 
    color: #2c3e50; 
    font-size: 28px; 
    margin-bottom: 8px; 
} 
.header p { 
    color: #7f8c8d; 
    font-size: 14px; 
} 
.table-container {
     background: #ffffff; 
    padding: 25px; 
    border-radius: 12px; 
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08); 
    overflow-x: auto; 
}
 table {
     width: 100%; 
 border-collapse: collapse; 
 min-width: 700px; 
} 
 thead { 
    background: #2c3e50; 
    color: white; 
} 
 th { 
    padding: 15px; 
    text-align: left; 
    font-size: 14px; 
    font-weight: 600;
 } 
 td { 
    padding: 15px; 
    border-bottom: 1px solid #eeeeee; 
    font-size: 14px; } 
 tbody tr { 
    transition: 0.2s ease; 
} 
tbody tr:hover {
     background: #f8f9fa; 
    } 
 tbody tr:last-child td { 
    border-bottom: none; 
} .id {
     font-weight: bold; 
     color: #3498db; 
    } 
 .username { 
    font-weight: 600; 
    color: #2c3e50; } 
 .email { 
    color: #555; 
} @media (max-width: 768px) { body { padding: 20px; } 
 .header h1 {
     font-size: 22px;
     } 
 .table-container {
     padding: 15px; 
    } } 
 </style>

</head>
<body>
    <h1>Welcome to Userview View</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['id']); ?></td>
                    <td><?php echo htmlspecialchars($user['first_name']); ?></td>
                    <td><?php echo htmlspecialchars($user['last_name']); ?></td>
                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                    <td><?php echo htmlspecialchars($user['username']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>