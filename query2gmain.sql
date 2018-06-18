SELECT tforecast2g.*, taccion2grf.* ,taccion2gtrs.*
FROM tforecast2g
JOIN taccion2grf ON tforecast2g.Id = taccion2grf.IdReg
JOIN taccion2gtrs ON tforecast2g.Id = taccion2gtrs.IdReg;



SELECT tforecast2g.*, tforecast3g.* , tforecast4g.*
FROM tforecast2g
JOIN tforecast3g ON tforecast2g.Id_de_tarea = tforecast3g.Id_de_tarea
JOIN tforecast4g ON tforecast2g.Id_de_tarea = tforecast4g.Id_de_tarea;