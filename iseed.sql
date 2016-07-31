with x as
(select 
--    cl.oid,
    cl.relname "m", 
    COALESCE(cl2.oid,0) poid
--    cl2.relname as "parent_table"
    from 
        pg_class cl
        join pg_catalog.pg_tables t on t.tablename=cl.relname --and t.tablespace='wog'
--        join pg_namespace ns on cl.relnamespace = ns.oid and ns.nspname = 'wog'        
        left join pg_constraint con1 on con1.conrelid = cl.oid and con1.contype = 'f'
        left join pg_class cl2 on cl2.oid = con1.confrelid
    where
        cl.relname like 'wog_%'
and tablename!='wog_migrations'
--   join pg_attribute att on
--       att.attrelid = con.confrelid and att.attnum = con.child
--   join pg_attribute att2 on
--       att2.attrelid = con.conrelid and att2.attnum = con.parent
) select 'php artisan iseed '|| substr(m,5) from x
group by m
order by max(poid)