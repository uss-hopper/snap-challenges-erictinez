drop table if exists task;

create table task (
   taskId BINARY(20) not null,
   taskTitle varchar(255) not null,
   taskStarDate datetime null,
   taskDueDate datetime null,
   taskStatus varchar(64) not null,
   taskPriority varchar(64) not null,
   taskDescription varchar(256) null,
   primary key (taskId)
);