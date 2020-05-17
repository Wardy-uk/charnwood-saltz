<?php exit; ?>
1561401900
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (j5bq_moderator_cache m) LEFT JOIN j5bq_users u ON (m.user_id = u.user_id) LEFT JOIN j5bq_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}