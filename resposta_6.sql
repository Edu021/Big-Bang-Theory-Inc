SELECT MONTH(o.order_date) Mes, YEAR(o.order_date) Ano, SUM(o.order_total) Total
FROM orders o
INNER JOIN user u ON u.user_id = o.order_user_id
GROUP BY YEAR(o.order_date), MONTH(o.order_date);