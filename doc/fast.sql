insert into wog_balances (value,	 currency_id,	user_id)
select 1,1, id from wog_users where user_type=1