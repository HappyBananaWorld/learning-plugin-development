<div
    style="display: flex; justify-content: center; align-items: flex-start; gap: 2rem; padding: 2rem; height: 80vh; box-sizing: border-box;">
    <!-- Form -->
    <form action="" method="post" style="
        background: #fff;
        padding: 2rem;
        border-radius: 1rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        width: 100%;
    ">
        <h1 style="text-align: center; color: #0ea5e9;">Add Option</h1>
        <input type="text" name="key" placeholder="Key" required style="
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 0.5rem;
            font-size: 1rem;
        ">
        <textarea name="value" placeholder="Value" required style="
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 0.5rem;
            font-size: 1rem;
            min-height: 100px;
        "></textarea>
        <button type="submit" name="submit" style="
            width: 100%;
            background-color: #0ea5e9;
            color: white;
            padding: 0.75rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 1rem;
            cursor: pointer;
        ">Save</button>
    </form>

    <!-- Scrollable Table -->
    <div style="
        background: #fff;
        padding: 1rem;
        border-radius: 1rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        max-height: 500px;
        overflow-y: auto;
        width: 300px;
    ">
        <h2 style="color: #0ea5e9; text-align: center;">Stored Options</h2>
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th style="text-align: left; border-bottom: 1px solid #ccc; padding: 0.5rem;">Key</th>
                    <th style="text-align: left; border-bottom: 1px solid #ccc; padding: 0.5rem;">Value</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Sample static table for demo

                $results =Option::where('option_name', 'like', '_lr_%')->get()->toArray();

                foreach ($results as $row) {
                    echo '<tr>';
                    echo '<td style="padding: 0.5rem; border-bottom: 1px solid #eee;">' . esc_html($row['option_name']) . '</td>';
                    echo '<td style="padding: 0.5rem; border-bottom: 1px solid #eee;">' . esc_html($row['option_value']) . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>