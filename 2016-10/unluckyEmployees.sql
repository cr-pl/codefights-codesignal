#https://codefights.com/challenge/XfJHK58ksduhL9MCQ
#267        
CREATE PROCEDURE unluckyEmployees()
BEGIN
	
set @i = 0;
select  name dep_name,n emp_number, t total_salary

from (select *, @i := @i + 1 s
      from
				(
					SELECT d.*, count(e.id)  n , IFNULL(sum(salary),0) t
										from Department d 
									left join	Employee e on department= d.id
						group by d.id
                    order by t desc, n desc, id
					) j
		where n<6
		
		 ) k
where  s% 2 ;
END 
