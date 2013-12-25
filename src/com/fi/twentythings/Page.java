package com.fi.twentythings;

import com.googlecode.objectify.annotation.Entity;
import com.googlecode.objectify.annotation.Id;
import com.googlecode.objectify.annotation.Ignore;
import com.googlecode.objectify.annotation.Index;

/**
 * Pages represent a single page of data in an Article. Page information may be
 * modified via the CMS (see: cmseditpage.php).
 * 
 * @author jonathan.gray
 */
@Entity
public class Page {

	@Id
	String id;
	@Index
	String stub;
	@Index
	String locale;
	String pageNumber;
	String template;
	String content;

	@Ignore
	String doNotPersist;

	@SuppressWarnings("unused")
	private Page() {
	}

	public Page(String id, String stub, String locale, String pageNumber,
			String template, String content) {
		this.id = id;
		this.stub = stub;
		this.locale = locale;
		this.pageNumber = pageNumber;
		this.template = template;
		this.content = content;
	}

	public String getStub() {
		return stub;
	}

	public void setStub(String stub) {
		this.stub = stub;
	}

	public String getLocale() {
		return locale;
	}

	public void setLocale(String locale) {
		this.locale = locale;
	}

	public String getId() {
		return id;
	}

	public void setId(String id) {
		this.id = id;
	}

	public String getPageNumber() {
		return pageNumber;
	}

	public void setPageNumber(String pageNumber) {
		this.pageNumber = pageNumber;
	}

	public String getTemplate() {
		return template;
	}

	public void setTemplate(String template) {
		this.template = template;
	}

	public String getContent() {
		return content;
	}

	public void setContent(String content) {
		this.content = content;
	}

}
