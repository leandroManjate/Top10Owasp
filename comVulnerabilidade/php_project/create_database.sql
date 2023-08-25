--Estrutura de tabela para utilizadores

CREATE TABLE users (
     user_id int(11) NOT NULL,
      user_name varchar(100) NOT NULL,
       user_email varchar(100) NOT NULL,
       user_password varchar(100) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--ENcher a tabela de utilizadores

INSERT INTO users (user_id, user_name, user_email, user_password) VALUES (1, 'Mark', 'mark@example.com', '81dc9bdb52d04dc20036dbd8313ed055');
INSERT INTO users (user_id, user_name, user_email, user_password) VALUES (2, 'Err', 'err@example.com', '81dc9bdb52d04dc20036dbd8313ed055');
 INSERT INTO users (user_id, user_name, user_email, user_password) VALUES (3, 'David', 'david@example.com', '81dc9bdb52d04dc20036dbd8313ed055');
 INSERT INTO users (user_id, user_name, user_email, user_password) VALUES (4, 'Gui', 'gui@example.com', '81dc9bdb52d04dc20036dbd8313ed055');
INSERT INTO users (user_id, user_name, user_email, user_password) VALUES  (5, 'Untrue', 'untrue@example.com', '81dc9bdb52d04dc20036dbd8313ed055');

 --Indexes para  table `user`

 ALTER TABLE users
  ADD PRIMARY KEY (user_id),
  ADD UNIQUE KEY UX_Constraint (user_email);

-- AUTO_INCREMENT for table `users`


  ALTER TABLE users
  MODIFY user_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;