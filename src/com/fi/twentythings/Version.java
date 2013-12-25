package com.fi.twentythings;

import com.googlecode.objectify.annotation.Entity;
import com.googlecode.objectify.annotation.Id;
import com.googlecode.objectify.annotation.Ignore;
import com.googlecode.objectify.annotation.Index;

/**
 * This class is used to store the version number of the app - the version
 * number is incremented on any write to the datastore. see objectify.php to see
 * incrementing code
 * 
 * @author jonathan.gray
 */
@Entity
public class Version {

	@Id
	String id;
	@Index
	String version;

	@Ignore
	String doNotPersist;

	@SuppressWarnings("unused")
	private Version() {
	}

	public Version(String id, String version) {
		this.id = id;
		this.version = version;
	}

	public String getId() {
		return id;
	}

	public void setId(String id) {
		this.id = id;
	}

	public String getVersion() {
		return version;
	}

	public void setVersion(String version) {
		this.version = version;
	}

}
