SELECT u.user_name Name, u.user_city City, u.user_country Country, o.order_date Date, o.order_total 'Total do Pedido' 
FROM user u 
LEFT JOIN orders o ON u.user_id = o.order_user_id 
WHERE u.user_id = 1 OR u.user_id = 3 OR u.user_id = 5 
ORDER BY u.user_name;